<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = DB::table("users")->get();
        $about = DB::table('abouts')->get();
        $skill = DB::table('skills')->get();
        $educational = DB::table('educationals')->get();
        $contact = DB::table('contacts')->get();

        // $aboutres = $about[0];
        // $experience = DB::table('experiences')->get();
        // $webinar = DB::table('webinars')->get();
        // $blog = DB::table('blogs')->get();
        // return view('welcome', compact('about'));
        return view('welcome', compact('user', 'about', 'skill', 'educational', 'contact'));

        // dd($about[0]->name);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}