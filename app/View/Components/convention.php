<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class convention extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $date,
        protected string $title
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        $date = $this->date;
        $title = $this->title;

        return view("components.convention", compact("date", "title"));
    }
}
