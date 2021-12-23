<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'title'=>'CSS',
            'slug'=>'css',
            'color'=>'blue',
            'created_at'=>now(),
            'updated_at'=>now()
    ]);
    Category::insert([
        'title'=>'HTML',
        'slug'=>'html',
        'color'=>'red',
        'created_at'=>now(),
            'updated_at'=>now()
    ]);
    Category::insert([
        'title'=>'JAVASCRIPT',
        'slug'=>'javascript',
        'color'=>'yellow',
        'created_at'=>now(),
            'updated_at'=>now()
    ]);

    Category::insert([
        'title'=>'LARAVEL',
        'slug'=>'laravel',
        'color'=>'green',
        'created_at'=>now(),
            'updated_at'=>now()
    ]);
    }
}
