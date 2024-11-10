<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteModal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $id,
        protected string $title,
        protected string $type
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view("components.delete-modal", [
            "id" => $this->id,
            "title" => $this->title,
            "type" => $this->type
        ]);
    }
}
