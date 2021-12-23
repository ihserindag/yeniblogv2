<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::insert([
            'title'=>'CSS Öğrenimi',
            'image'=>'photo1.jpg',
            'size'=>'buyuk',
            'category_id'=>4,
            'created_at'=>now(),
            'updated_at'=>now()

       ]);
       Banner::insert([
        'title'=>'İşletmenizi Google Taşıyın',
        'image'=>'photo2.jpg',
        'size'=>'buyuk',
        'category_id'=>3,
        'created_at'=>now(),
        'updated_at'=>now()

        ]);

        Banner::insert([
            'title'=>'React Öğrenin',
            'image'=>'photo3.jpg',
            'size'=>'kucuk',
            'category_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()

       ]);

       Banner::insert([
        'title'=>'Bootstrap Öğrenin',
        'image'=>'photo4.jpg',
        'size'=>'kucuk',
        'category_id'=>4,
        'created_at'=>now(),
        'updated_at'=>now()

   ]);

   Banner::insert([
    'title'=>'Bootstrap Öğrenin',
    'image'=>'photo5.jpg',
    'size'=>'kucuk',
    'category_id'=>1,
    'created_at'=>now(),
    'updated_at'=>now()

]);


    }
}
