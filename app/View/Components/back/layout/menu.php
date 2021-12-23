<?php

namespace App\View\Components\back\layout;

use App\Models\Authority;
use Illuminate\View\Component;

class menu extends Component
{
    public $yetki;
    public $authorities;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->yetki= auth()->user()->yetki_id;
        $this->authorities=Authority::where('id',$this->yetki)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.back.layout.menu');
    }
}
