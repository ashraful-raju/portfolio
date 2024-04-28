<?php

namespace App\View\Components\Home;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contact extends Component
{
    public $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $items = Setting::where('name', 'like', 'social_%')->pluck('value', 'name');

        $this->links = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.contact');
    }
}
