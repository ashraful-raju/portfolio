<?php

namespace App\View\Components\Home;

use App\Models\Service as ModelsService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Service extends Component
{
    public $services;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = ModelsService::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.service');
    }
}
