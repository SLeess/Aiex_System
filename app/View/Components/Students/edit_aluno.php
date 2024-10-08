<?php

namespace App\View\Components\Students;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class edit_aluno extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected $aluno)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.students.edit_aluno', compact('aluno'));
    }
}
