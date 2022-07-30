<?php

namespace Mlk\Share\Components\Panel;

use Illuminate\View\Component;

class Select extends Component
{
    public $class;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $class = 'form-control')
    {
        $this->name = $name;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('Share::components.panel.select');
    }
}
