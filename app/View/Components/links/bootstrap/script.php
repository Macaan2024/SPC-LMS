<?php

namespace App\View\Components\links\bootstrap;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class script extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>
blade;
    }
}
