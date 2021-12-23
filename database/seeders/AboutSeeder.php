<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            'name'=>'İbrahim Halil Serindağ',
            'image'=>'imgames/profil.jpg',
            'job'=>'Front-End Developer',
            'description'=>' <h1>I’m Bill Gates</h1>
            <div class="social">
                <a href="#" title="Twitter"><i class="icon-social_twitter_circle"></i></a>
                <a href="#" title="Github"><i class="icon-social_github_circle"></i></a>
                <a href="#" title="LinkedIn"><i class="icon-social_linkedin_circle"></i></a>
            </div>
            <div class="clear"></div>
            <span class="general-info-right-author-info">Front-End Developer at Microsoft Company</span>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ulla corper suscipit lobortis nisl ut aliquip ex ea commodo
                consequat. Duis autem vel eum iriure dolor in hendr rit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
                nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                feugait nulla facilisi. Lorem ipsum dolor sitamet, consectetuer adipiscing elit.
            </p>',
            'cw'=>'dosya/cw.pdf',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
