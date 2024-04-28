<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    protected $educationRules = [
        'title' => ['string', 'required'],
        'description' => ['string', 'nullable'],
        'duration' => ['string', 'nullable'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('educations.index', [
            'educations' => Education::all()
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->educationRules);

        Education::create($validated);

        return redirect()->route('educations.index')->with('alert', 'Education added  successfully!');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validated = $request->validate($this->educationRules);

        $education->update($validated);

        return back()->with('alert', 'Education updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return back()->with('alert', 'Education deleted');
    }
}
