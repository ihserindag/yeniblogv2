<?php

namespace App\View\Components\front\layout;

use App\Models\Social;
use Illuminate\View\Component;

class fotter extends Component
{
    public $socials=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->socials=Social::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.layout.fotter');
    }
}
