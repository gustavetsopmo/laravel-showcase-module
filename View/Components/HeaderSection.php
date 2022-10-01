<?php

namespace Modules\Showcase\View\Components;

use Illuminate\View\Component;

class HeaderSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $title,
        public string $subTitle = '',
    )
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('showcase::components.header-section');
    }
}
