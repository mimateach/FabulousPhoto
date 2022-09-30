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
        Photo::factory()->create(['name' => 'Banff National Park', 'artist' => 'Akshay Nayak', 'img' => 'https://images.pexels.com/photos/9796785/pexels-photo-9796785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Canadá']);
        Photo::factory()->create(['name' => 'Mountain Rocks', 'artist' => 'ConfinedRiley', 'img' => 'https://images.pexels.com/photos/10344525/pexels-photo-10344525.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Canadá']);
        Photo::factory()->create(['name' => 'Forest With Fog', 'artist' => 'Francesco Ungaro', 'img' => 'https://images.pexels.com/photos/1671324/pexels-photo-1671324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Estados Unidos']);
        Photo::factory()->create(['name' => 'Hot Chocolate', 'artist' => 'Karolina Grabowska', 'img' => 'https://images.pexels.com/photos/5426969/pexels-photo-5426969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Forest during Day', 'artist' => 'Lauren Forson', 'img' => 'https://images.pexels.com/photos/2816303/pexels-photo-2816303.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Canadá']);
        Photo::factory()->create(['name' => 'Man Standing Near Water', 'artist' => 'Andre Furtado', 'img' => 'https://images.pexels.com/photos/2916821/pexels-photo-2916821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Canadá']);
        Photo::factory()->create(['name' => 'River Between Green-leafed Tree', 'artist' => 'Akshay Nayak', 'img' => 'https://images.pexels.com/photos/9796785/pexels-photo-9796785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Canadá']);
        Photo::factory()->create(['name' => 'Hot Chocolate', 'artist' => 'Karolina Grabowska', 'img' => 'https://images.pexels.com/photos/5426969/pexels-photo-5426969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Reading', 'artist' => 'Vlada Karpovich', 'img' => 'https://images.pexels.com/photos/6801965/pexels-photo-6801965.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Tea with Lemon', 'artist' => 'Karolina Grabowska', 'img' => 'https://images.pexels.com/photos/5421530/pexels-photo-5421530.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Outside the Window', 'artist' => 'RODNAE Productions', 'img' => 'https://images.pexels.com/photos/8865403/pexels-photo-8865403.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Mountain Under Cloudy Sky', 'artist' => 'Roberto Nickson', 'img' => 'https://images.pexels.com/photos/2875010/pexels-photo-2875010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Canadá']);
        Photo::factory()->create(['name' => 'Lighted Candles', 'artist' => 'Alena Zadorozhnaya', 'img' => 'https://images.pexels.com/photos/10163378/pexels-photo-10163378.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Rusia']);
        Photo::factory()->create(['name' => ' Dachshund Puppy', 'artist' => 'Dominika Roseclay', 'img' => 'https://images.pexels.com/photos/4148015/pexels-photo-4148015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Brown Wooden Cabinet', 'artist' => 'Emre Can Acer', 'img' => 'https://images.pexels.com/photos/2079436/pexels-photo-2079436.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Seats On Ground', 'artist' => 'Taryn Elliott', 'img' => 'https://images.pexels.com/photos/4112237/pexels-photo-4112237.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => ' Breakfast on bed', 'artist' => 'Ioana Motoc', 'img' => 'https://images.pexels.com/photos/4346331/pexels-photo-4346331.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Coffee', 'artist' => 'Daniela Constantini', 'img' => 'https://images.pexels.com/photos/5591676/pexels-photo-5591676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Near the Shelves', 'artist' => 'Bilakis', 'img' => 'https://images.pexels.com/photos/11222028/pexels-photo-11222028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Crockery', 'artist' => 'Merve Şahin', 'img' => 'https://images.pexels.com/photos/9347048/pexels-photo-9347048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Assorted Fruits', 'artist' => 'Leon Li', 'img' => 'https://images.pexels.com/photos/8426464/pexels-photo-8426464.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Laboratory Glassware', 'artist' => 'Tara Winstead', 'img' => 'https://images.pexels.com/photos/7723322/pexels-photo-7723322.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Variety', 'artist' => 'Alex Tran', 'img' => 'https://images.pexels.com/photos/12295679/pexels-photo-12295679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Mexico']);
        Photo::factory()->create(['name' => 'Guitar Picks', 'artist' => 'Rombo', 'img' => 'https://images.pexels.com/photos/7462026/pexels-photo-7462026.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'French Macarons', 'artist' => 'Carlie Wright', 'img' => 'https://images.pexels.com/photos/6442118/pexels-photo-6442118.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Sliced Fruit', 'artist' => 'Mikhail Nilov', 'img' => 'https://images.pexels.com/photos/9393670/pexels-photo-9393670.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Vegetables', 'artist' => 'Cherisha Norman', 'img' => 'https://images.pexels.com/photos/5106005/pexels-photo-5106005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Estados Unidos']);
        Photo::factory()->create(['name' => 'Fruits on a Wooden Table', 'artist' => 'Engin Akyurt', 'img' => 'https://images.pexels.com/photos/6465178/pexels-photo-6465178.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Vintage Suitcases', 'artist' => 'Engin Akyurt', 'img' => 'https://images.pexels.com/photos/10259773/pexels-photo-10259773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Books', 'artist' => 'Ena Marinkovic', 'img' => 'https://images.pexels.com/photos/5121829/pexels-photo-5121829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Books on the Floor', 'artist' => 'Cottonbro', 'img' => 'https://images.pexels.com/photos/4866035/pexels-photo-4866035.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Selective', 'artist' => 'George Milton', 'img' => 'https://images.pexels.com/photos/7034613/pexels-photo-7034613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Books on Wooden Shelf', 'artist' => 'Александр Трубицын', 'img' => 'https://images.pexels.com/photos/9223391/pexels-photo-9223391.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Rusia']);
        Photo::factory()->create(['name' => 'Green Leaves', 'artist' => 'George Milton', 'img' => 'https://images.pexels.com/photos/7034759/pexels-photo-7034759.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Books Stacked Together', 'artist' => 'Polina Zimmerman', 'img' => 'https://images.pexels.com/photos/3747565/pexels-photo-3747565.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Book on a Bookstand', 'artist' => 'Andy Lee', 'img' => 'https://images.pexels.com/photos/12391389/pexels-photo-12391389.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Yule Goat', 'artist' => 'Barnabas Davoti', 'img' => 'https://images.pexels.com/photos/10801615/pexels-photo-10801615.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Fruits and a Mandolin', 'artist' => 'Cottonbro', 'img' => 'https://images.pexels.com/photos/7097789/pexels-photo-7097789.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Globe & book', 'artist' => 'Marina Leonova', 'img' => 'https://images.pexels.com/photos/7634926/pexels-photo-7634926.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Basket Bike', 'artist' => 'Melike Benli', 'img' => 'https://images.pexels.com/photos/7499773/pexels-photo-7499773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Koi Fish', 'artist' => 'Fox', 'img' => 'https://images.pexels.com/photos/213399/pexels-photo-213399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Blue Shoes', 'artist' => 'Ömer Aydın', 'img' => 'https://images.pexels.com/photos/6869352/pexels-photo-6869352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Coated Lizard', 'artist' => 'Pixabay', 'img' => 'https://images.pexels.com/photos/62289/yemen-chameleon-chamaeleo-calyptratus-chameleon-reptile-62289.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Colors', 'artist' => 'Sofia Guzeva', 'img' => 'https://images.pexels.com/photos/10145113/pexels-photo-10145113.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Book and Flowers', 'artist' => 'Hissetmehurriyeti', 'img' => 'https://images.pexels.com/photos/8519445/pexels-photo-8519445.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Gray Bridge', 'artist' => 'Martin Damboldt', 'img' => 'https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Alemania']);
        Photo::factory()->create(['name' => 'Mushrooms', 'artist' => 'Kristina Paukshtite', 'img' => 'https://images.pexels.com/photos/5429056/pexels-photo-5429056.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'location' => 'Pexels']);
        Photo::factory()->create(['name' => 'Blue Shoes', 'artist' => 'Ömer Aydın', 'img' => 'https://images.pexels.com/photos/6869352/pexels-photo-6869352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'location' => 'Pexels']);




        /*         Photo::factory(40)->create();
 */
        User::factory()->create(['name' => 'user', 'email' => 'user@fabphoto.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Admin', 'email' => 'admin@fabphoto.com', 'isAdmin' => true]);
/*         User::factory()->create(['name' => 'Admin', 'email' => 'super@fabphoto.com', 'password' => 'fabuloso', 'isSuperadmin' => true]);
 */

       /*  Photo::factory()->has(User::factory()->count(5))->create();
        User::factory()->has(Photo::factory()->count(3))->create(); */
    }
}
