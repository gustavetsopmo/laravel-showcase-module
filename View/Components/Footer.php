<?php

namespace Modules\Showcase\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $navLinks;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navLinks = config('app.nav_links');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('showcase::components.footer');
    }
}
