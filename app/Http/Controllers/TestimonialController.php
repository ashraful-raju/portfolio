<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('testimonials.index', [
            'testimonials' => Testimonial::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        Testimonial::create($request->validated());

        return redirect()->route('testimonials.index')->with('alert', 'Review added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {

        $testimonial->update($request->validated());

        return back()->with('alert', 'Review updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return back()->with('alert', 'Review deleted');
    }
}
