<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Photo;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**s
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

        User::factory()->create(['name' => 'Super', 'email' => 'super@phabulous.com', 'password' => 'fabulous', 'isSuperadmin' => true]);
        User::factory()->create(['name' => 'Admin', 'email' => 'admin@phabulous.com', 'isSuperadmin' => false, 'isAdmin' => true]);
    }
}
