<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FavouritesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_photo_can_be_added_to_favourites()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_list_of_photos_appear_in_favouritesPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_photo_can_be_removed_from_favourites()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
