<?php

namespace App\View\Components\front\widgets;

use App\Models\About;
use Illuminate\View\Component;

class cw extends Component
{
    public $abouts=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->abouts=About::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.widgets.cw');
    }
}
