<?php

namespace App\Http\Controllers;

use App\Stadium_profile;
use Illuminate\Http\Request;

class StadiumProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stadium_profile  $stadium_profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stadium_profile = Stadium_profile::with("stadium")->findOrFail($id);
        return view('stadium-profile', compact('stadium_profile'));
    }

    public function getStadiumProfile(Request $request)
    {
        $id = $request->id;
        $stadium_profile = Stadium_profile::findOrFail($id);
        return json_encode($stadium_profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stadium_profile  $stadium_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(stadium_profile $stadium_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stadium_profile  $stadium_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stadium_profile $stadium_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stadium_profile  $stadium_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(stadium_profile $stadium_profile)
    {
        //
    }
}
