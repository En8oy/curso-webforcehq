<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Irbing Alejandro Moreno Garcia',
            'slug' => 'en8oy',
            'username' => 'En8oy',
            'email' => 'irbing.moreno@outlook.com',
            'password' => bcrypt("password")
        ]);
        
        User::factory(10)->create();
        Category::factory(20)->create();
        Post::factory(100)->create();
    }
}
