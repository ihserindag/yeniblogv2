<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Authority;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Social;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{

    private $abouts = [];
    private $blogs = [] ;
    private $categories = [] ;
    private $videos=[];
    private $contacts=[];
    private $social=[];
    private $projects=[];
    private $banners=[];
    private $authorities=[];


    public function __construct(){

        $this->abouts = About::all();
        $this->categories=Category::all();
        $this->videos=Video::all();
        $this->blogs = Blog::paginate(5);
        $this->contacts=Contact::all();
        $this->socials=Social::all();
        $this->projects=Project::all();
        $this->banners=Banner::all();
        $this->authorities=Authority::all();



    }

    public function index()
    {

        $data=[

           'blogs'=>$this->blogs,
        ];


        return view('front.homepage',compact('data'));
    }

    public function about(){

        $abouts = $this->abouts;
        return view('front.about',compact('abouts'));
    }

    public function category($slug)
    {

        $data['categories1']=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');


        $data['categories']=$this->categories;
        $data['blogs']=Blog::where('category_id',$data['categories1']->id)->orderBy('created_at','DESC')->paginate(2);

        return view('front.category',compact('data'));
    }

    public function project()
    {

        $data['categories'] = $this->categories;
        $data['projects']=$this->projects;

        return view('front.project',compact('data'));
    }

    public function video()
    {
        $data['videos']=$this->videos;
        $data['categories']=$this->categories;
        return view('front.video',compact('data'));

    }


    public function contact()
    {
        $contacts = $this->contacts;
        return view('front.contact',compact('contacts'));

    }


    public function blog($slug)
    {
    }


    public function projects($slug)
    {
    }


}
