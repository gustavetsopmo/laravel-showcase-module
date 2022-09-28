<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public string $about,
        public string $role,
        public string $avatar,
        public array $socials = [],
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.team-card');
    }
}