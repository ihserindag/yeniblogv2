<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class Blogs extends Component
{



    public $title;
    public $category_id;
    public $description;
    public $showDiv = false;
    public $postId=null;
    public $showModalForm = false;


    public function render()
    {
        return view('livewire.blogs',
         ['blogs'=>Blog::orderBy('created_at','DESC')->get(),
        'categories'=>Category::all()
    ]);
    }
    public function openDiv()
    {

        $this->showDiv =! $this->showDiv;
    }

    public function submit()
    {
         $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $blog=new Blog();
        $blog->title=$this->title;
        $blog->slug=Str::slug($this->title,'-');
        $blog->category_id=$this->category_id;
        $blog->description=$this->description;
        $blog->user_id=auth()->user()->id;
        $blog->created_at=now();
        $blog->updated_at=now();
        $blog->save();
        $this->showDiv=false;
        session()->flash('message', 'Blog Eklendi');
        $this->reset();
        $this->render();




    }

    public function showEditPost($id)
    {
        $this->showDiv =! $this->showDiv;
        $this->postId=$id;
        $this->loadEditForum();

    }

    public function loadEditForum()
    {

        $blog=Blog::findOrFail($this->postId);
        $this->title=$blog->title;
        $this->category_id=$blog->category_id;
        $this->description=$blog->description;




    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);


        $data=Blog::find($this->postId);
        $data->update([
            'title'=>$this->title,
            'slug'=>Str::slug($this->title,'-'),
            'category_id'=>$this->category_id,
            'description'=>$this->description,
            'created_at'=>now(),

        ]);

        $this->showDiv=false;
        session()->flash('message', 'Blog Güncellendi');
        $this->reset();
        $this->render();

    }

    public function deletePost($id)
    {
        $blog=Blog::find($id);
        $blog->delete();
        $this->showDiv=false;
        session()->flash('message', 'Blog Silindi');
        $this->reset();
        $this->render();

    }








}
