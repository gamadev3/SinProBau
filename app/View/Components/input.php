<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $name,
        protected string $type,
        protected string $label,
        protected string $placeholder
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        $name = $this->name;
        $type = $this->type;
        $label = $this->label;
        $placeholder = $this->placeholder;

        return view("components.input", compact("name", "type", "label", "placeholder"));
    }
}
