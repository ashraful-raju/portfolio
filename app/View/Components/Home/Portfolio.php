<?php

namespace App\View\Components\Home;

use App\Models\Portfolio as PortfolioModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public $portfolios;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->portfolios = PortfolioModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
