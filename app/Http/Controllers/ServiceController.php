<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $validationRules = [
        'title' => ['string', 'required'],
        'icon' => ['string', 'required'],
        'description' => ['string', 'nullable'],
    ];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('services.index', [
            'services' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->validationRules);

        Service::create($validated);

        return redirect()->route('services.index')->with('alert', 'Service added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate($this->validationRules);

        $service->update($validated);

        return back()->with('alert', 'Service updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return back()->with('alert', 'Service deleted');
    }
}
