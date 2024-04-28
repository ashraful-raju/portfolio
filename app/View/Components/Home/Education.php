<?php

namespace App\View\Components\Home;

use App\Models\Education as ModelsEducation;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Education extends Component
{
    public $educations;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->educations = ModelsEducation::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.education');
    }
}
