<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Photo;

class DetailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Photo_appears_in_Details()
    {
            $this->withExceptionHandling();
            $photo = Photo::factory()->create();
            $response = $this->get(route('detail', $photo->id));
            $response->assertStatus(200)
                        ->assertViewIs('detailsPhoto'); 
            $response->assertSee('detail');
    }
}
