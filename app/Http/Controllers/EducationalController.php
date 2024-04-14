<?php

namespace App\Http\Controllers;

use App\Models\Educational;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $educationals = Educational::get();
        return view("educational.educational", compact("educationals"))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("educational.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Educational::create($request->all());
        return redirect()->route("educationals.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Educational $educational)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Educational $educational)
    {
        //
        return view("educational.edit", compact("educational"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Educational $educational): RedirectResponse
    {
        //
        $educational->update($request->all());
        return redirect()->route("educationals.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Educational $educational): RedirectResponse
    {
        //
        $educational->delete();
        return redirect()->route("educationals.index");
    }
}
