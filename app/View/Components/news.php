<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class News extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $image,
        protected string $date,
        protected string $title,
        protected string $content,
        protected string $id
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view("components.news", [
            "image" => $this->image,
            "date" => $this->date,
            "title" => $this->title,
            "content" => $this->content,
            "id" => $this->id,
        ]);
    }
}
