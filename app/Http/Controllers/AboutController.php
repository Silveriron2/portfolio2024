<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $abouts = About::get();
        return view("about.about", compact("abouts"))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("about.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        about::create($request->all());
        return redirect()->route("abouts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
        return view("about.edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about): RedirectResponse
    {
        //
        $about->update($request->all());
        return redirect()->route("abouts.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about): RedirectResponse
    {
        //
        $about->delete();
        return redirect()->route("abouts.index");
    }
}
