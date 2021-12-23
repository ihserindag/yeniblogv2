<?php

namespace Database\Seeders;
use App\Models\Authority;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Social;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthoritySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
