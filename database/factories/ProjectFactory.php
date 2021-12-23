<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
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
            'shortdescription'=>$this->faker->text(200),
            'description'=>$this->faker->text(1000),
            'category_id'=>Category::all()->random()->id,
            'slug'=>Str::slug($title,'-'),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime()

        ];
    }
}
