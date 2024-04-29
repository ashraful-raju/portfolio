<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PortfolioController extends Controller
{
    protected $validationRules = [
        'title' => ['string', 'required'],
        'link' => ['string', 'required'],
        'description' => ['string', 'nullable'],
        'technologies' => ['string', 'nullable'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('portfolios.index', [
            'projects' => Portfolio::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->validationRules);
        if ($validated['technologies'] ?? null) {
            $validated['technologies'] = str($validated['technologies'])
                ->explode(',')
                ->map(fn ($item) => trim($item));
        }

        Portfolio::create($validated);

        return redirect()->route('portfolios.index')->with('alert', 'Project added in Portfolio successfully!');
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate($this->validationRules);

        $portfolio->update($validated);

        return back()->with('alert', 'Portfolio updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return back()->with('alert', 'Portfolio deleted');
    }
}
