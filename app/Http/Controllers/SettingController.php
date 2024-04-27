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
}
