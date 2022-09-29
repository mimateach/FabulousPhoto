<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Photo;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Photo::factory()->create(['name' => 'Nenúfares', 'artist' => 'Monet', 'img' => 'https://i.pinimg.com/originals/b3/50/21/b35021c58bc5bbcb62361a72775ffc8c.jpg', 'location' => 'Louvre']);
        Photo::factory()->create(['name' => 'Nenúfares', 'artist' => 'Monet', 'img' => 'https://i.pinimg.com/originals/b3/50/21/b35021c58bc5bbcb62361a72775ffc8c.jpg', 'location' => 'Louvre']);
        Photo::factory()->create(['name' => 'Nenúfares', 'artist' => 'Monet', 'img' => 'https://i.pinimg.com/originals/b3/50/21/b35021c58bc5bbcb62361a72775ffc8c.jpg', 'location' => 'Louvre']);
        
        Photo::factory(40)->create();

        User::factory()->create(['name' => 'user', 'email' => 'user@fabphoto.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Admin', 'email' => 'admin@fabphoto.com', 'isAdmin' => true]);
/*         User::factory()->create(['name' => 'Admin', 'email' => 'super@fabphoto.com', 'password' => 'fabuloso', 'isSuperadmin' => true]);
 */

        Photo::factory()->has(User::factory()->count(5))->create();
        User::factory()->has(Photo::factory()->count(3))->create();
    }
}
