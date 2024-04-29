<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    protected $experienceRules = [
        'company' => ['string', 'required'],
        'link' => ['string', 'required'],
        'address' => ['string', 'nullable'],
        'position' => ['string', 'required'],
        'duration' => ['string', 'nullable'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('experiences.index', [
            'experiences' => Experience::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->experienceRules);

        Experience::create($validated);

        return redirect()->route('experiences.index')->with('alert', 'Experience added successfully!');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate($this->experienceRules);

        $experience->update($validated);

        return back()->with('alert', 'Experience updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return back()->with('alert', 'Experience deleted');
    }
}
