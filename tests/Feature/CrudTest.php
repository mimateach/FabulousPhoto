<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Photo;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example. 
     *
     * @return void
     */
    use RefreshDatabase;


    //Test for Read
    public function test_Photos_appear_in_home()
    {
        $this->withExceptionHandling();
        $photos = Photo::factory(3)->create();
        $photo = $photos[1];

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('home');
    }

    //Test for Create
    public function test_user_can_add_photos(){
        
    }
}

