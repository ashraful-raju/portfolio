<?php

namespace App\View\Components\Home;

use App\Models\Testimonial as ModelsTestimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonial extends Component
{
    // public $testimonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->testimonials = ModelsTestimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.testimonial', [
            'testimonials' => ModelsTestimonial::all()
        ]);
    }
}
