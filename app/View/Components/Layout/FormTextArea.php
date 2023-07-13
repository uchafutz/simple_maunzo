<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextArea extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $value;
    public $type;
    public $label;
    public function __construct($name = null, $value = null, $type = 'text', $label = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.form-text-area');
    }
}
