<?php

namespace App\View\Components\front\layout;

use App\Models\Authority;
use Illuminate\View\Component;
use App\Models\Category;

class menu extends Component
{

    public $categories=[];
    public $authorities=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories=Category::all();
        $this->authorities=Authority::all();
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.layout.menu');
    }
}
