<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Foundation\Testing\assert;
use Tests\Feature\AssertCount;
use Illuminate\Contracts\Auth\Authenticatable;

class FavouritesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /* public function test_a_photo_can_be_added_to_favourites()
    {
        $this->withExceptionHandling();
        $photo = Photo::factory()->create();
        $user = User::factory()->create();
            
        $response = $this->get(route('addFav', $user->id ,$photo->id));
        $this->actingAs($user);

        $response->assertSee('');

    }

    public function test_a_list_of_photos_appear_in_favouritesPage()
    {
            $this->withExceptionHandling();
            $photo = Photo::factory()->create();
            $response = $this->get(route('favourites', $photo->id));
    
        }
    

    public function test_a_photo_can_be_removed_from_favourites()
    {
            $this->withExceptionHandling();
            $user = User::factory()->create();
            $photo = Photo::factory()->create();
            $response = $this->get(route('removeFav', $user->id, $photo->id));
            $this->actingAs($user);
                        
            $response->assertSee('');
        
    } */
}
