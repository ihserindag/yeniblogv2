<?php

namespace App\View\Components\front\layout;

use Illuminate\View\Component;

class head extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->title='heyyyyy';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.layout.head');
    }
}
