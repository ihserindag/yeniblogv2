<?php

namespace App\View\Components\front\widgets;

use App\Models\Banner as ModelsBanner;
use Illuminate\View\Component;

class banner extends Component
{
    public $banners=[];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {


        $this->banners=ModelsBanner::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.widgets.banner');
    }
}
