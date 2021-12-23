<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::insert([
            'icon'=>'icon-social_linkedin_circle',
            'url'=>'#'
        ]);
        Social::insert([
            'icon'=>'icon-social_github_circle',
            'url'=>'#'
        ]);
        Social::insert([
            'icon'=>'icon-social_twitter_circle',
            'url'=>'#'
        ]);
    }
}
