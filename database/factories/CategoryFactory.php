<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = $this->faker->sentence($nbWords = 1, $variableNbWords = true);
        return [
            "category" => $category,
            "slug" =>  Str::slug($category),
            "description" => $this->faker->text($maxNbChars = 200)
        ];
    }
}
