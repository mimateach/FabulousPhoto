<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Photo;
use Illuminate\Foundation\Testing\assert;
use Tests\Feature\AssertCount

class CrudTest extends TestCase
{
    /**
     * A basic feature test example. 
     *
     * @return void
     */
    use RefreshDatabase;
use assertCount;

    //Test for Read
    public function test_Photos_appear_in_home()
    {
        $this->withExceptionHandling();
        $photos = Photo::factory(3)->create();
        $photo = $photos[1];

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('home');
    }

    // Test for Delete
    public function test_Photos_can_be_deleted(){
        $this->withExceptionHandling();
        $photo = Photo::factory(3)->create();
        $this->$assertCount(1, Photo::all());
        $response = $this->delete(route('remove', $photo->id));
    }   

    //Test for Create
    public function test_user_can_add_photos(){

    }
}

