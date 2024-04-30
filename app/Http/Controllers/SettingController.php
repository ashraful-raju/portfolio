<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index()
    {
        return view('settings');
    }

    function update(SettingRequest $request)
    {
        // dd($request->processData());
        Setting::addItems($request->processData());

        return back()->with('status', 'updated');
    }

    function updateContact(Request $request)
    {
        $data = $request->validate([
            'social_facebook' => ['nullable', 'string', 'url'],
            'social_twitter' => ['nullable', 'string', 'url'],
            'social_linkedin' => ['nullable', 'string', 'url'],
            'social_github' => ['nullable', 'string', 'url'],
        ]);

        // social_facebook => https://fb.com/raju

        Setting::addItems($data);

        return back()->with('status', 'updated');
    }
}
