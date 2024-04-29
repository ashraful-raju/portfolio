<?php

namespace App\View\Components\Home;

use App\Models\Experience as ModelsExperience;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Experience extends Component
{
    // public $experiences;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->experiences = ModelsExperience::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.experience', [
            'experiences' => ModelsExperience::all()  //(use this insteed of uper $experiences variable)
        ]);
    }
}
