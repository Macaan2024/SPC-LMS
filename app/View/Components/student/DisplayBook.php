<?php

namespace App\View\Components\student;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DisplayBook extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($booksGroupedByCategory)
    {
        $this->booksGroupedByCategory = $booksGroupedByCategory;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.student.dashboard.display-book');
    }
}
