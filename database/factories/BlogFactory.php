<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->faker->sentence(rand(1,3));
        return [
            'title'=>$title,
            'slug'=>Str::slug($title,'-'),
            'user_id'=>User::all()->random()->id,
            'category_id'=>Category::all()->random()->id,
            'description'=>$this->faker->text(200),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime()
        ];
    }
}
