<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $name,
        protected string $type,
        protected string $label,
        protected string $placeholder,
        protected string $value = ""
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view("components.input", [
            "name" => $this->name,
            "type" => $this->type,
            "label" => $this->label,
            "placeholder" => $this->placeholder,
            "value" => $this->value,
        ]);
    }
}
