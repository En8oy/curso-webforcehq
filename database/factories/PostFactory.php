<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition()
    {
        $title = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
        $text = $this->faker->text($maxNbChars = 10000);
        return [
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'title' => Str::title($title),
            'slug' => Str::slug($title),
            'short' => substr($text, -0, 100),
            'body' => '<p>'.$text.'</p>' 
        ];
    }
}
