<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $name;
    public $type;
    public $readonly;
    public $value;
    public function __construct($label = null, $name = null, $value = null,  $type = null, $readonly = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type ?? "text";
        $this->readonly = $readonly;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.form-input');
    }
}
