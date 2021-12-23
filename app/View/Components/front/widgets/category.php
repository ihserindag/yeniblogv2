<?php

namespace App\View\Components\front\widgets;

use App\Models\Category as ModelsCategory;
use Illuminate\View\Component;

class category extends Component
{
    public $categories=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories=ModelsCategory::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.widgets.category');
    }
}
