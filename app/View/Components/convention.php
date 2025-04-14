<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Convention extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $date,
        protected string $title,
        protected string $url
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view("components.convention", [
            "date" => $this->date,
            "title" => $this->title,
            "url" => $this->url
        ]);
    }
}
