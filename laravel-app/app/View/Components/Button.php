<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $selected;
    public $value;
    public $label;
    public function __construct()
    {
        $this->class = "btn btn-primary";
        $this->selected = true;
        $this->value=true;
        $this->label="label";
    }

    public function isSelected($option)
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
