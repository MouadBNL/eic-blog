<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class BaseLayout extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $title = "EIC blog")
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.base-layout');
    }
}
