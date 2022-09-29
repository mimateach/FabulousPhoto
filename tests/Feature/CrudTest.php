<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Photo;
use Illuminate\Foundation\Testing\assert;
use Tests\Feature\AssertCount;


class CrudTest extends TestCase
{
    /**
     * A basic feature test example. 
     *
     * @return void
     */
    use RefreshDatabase;

    //Test for Create
    public function test_user_can_add_photos(){
        $this->withExceptionHandling();
        
        $response = $this->post(route('storePhoto'),[
                'name' => 'name',
                'artist' => 'artist',
                'img' => 'img',
                'location' => 'location',
        ]);
        $this->assertCount(1, Photo::all());
    }

    //Test for Read
    public function test_Photos_appear_in_home()
    {
        $this->withExceptionHandling();
        $photos = Photo::factory(3)->create();
        $photo = $photos[1];

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('home');
    }


    
    // Test for Update
    public function test_user_can_update_Photos() {
        $this->withExceptionHandling();

        $photo = Photo::factory()->create();
        
        $this->assertCount(1, Photo::all());

        $response = $this->patch(route('update', $photo->id), ['name'=> 'New Name']);
        $this->assertEquals('New Name', Photo::first()->name);
    }

    // Test for Delete
    public function test_Photos_can_be_deleted(){
        $this->withExceptionHandling();
        $photo = Photo::factory()->create();
        $this->assertCount(1, Photo::all());
        $response = $this->delete(route('remove', $photo->id));

    } 

    // Test for Details View



}

