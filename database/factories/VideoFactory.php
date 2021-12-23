<?php

namespace Database\Factories;


use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideoFactory extends Factory
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
            'title' => $title,
           'link'=>'https://www.youtube.com/watch?v=PQaUP1iEVTc',
           'user_id'=>User::all()->random()->id,
           'slug'=>Str::slug($title,'-'),
           'category_id'=>Category::all()->random()->id,
           'created_at'=>$this->faker->dateTime(),
           'updated_at'=>$this->faker->dateTime()

        ];
    }
}
