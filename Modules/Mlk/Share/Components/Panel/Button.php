<?php

namespace Mlk\Share\Components\Panel;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $class;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'submit', $class = 'btn btn-outline-success', $title = 'ذخیره')
    {
        $this->type = $type;
        $this->class = $class;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('Share::components.panel.button');
    }
}
