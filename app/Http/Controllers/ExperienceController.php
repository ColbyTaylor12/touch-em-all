<?php

namespace App\Http\Controllers;

use App\Experience;
use Auth;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profile_id = $request->id; 
        $experience = Experience::where("profile_id", $profile_id)->get();
        return json_encode($experience);
    }

    public function getStadiumExp(Request $request)
    {
        $stadium_visited = $request->id; 
        $experience = Experience::where("stadium_visited", $stadium_visited)->get();
        return json_encode($experience);
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
        $experience = new Experience();
            $experience->stadium_visited = $request['stadium_visited'];
            $experience->day_visited = $request['day_visited'];
            $experience->ticket = $request['ticket'];
            $experience->beer = $request['beer'];
            $experience->soda = $request['soda'];
            $experience->hot_dog = $request['hot_dog'];
            $experience->profile_id = Auth::user()->id;
        $experience->save();
        

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $profile_id = $request->profile_id;
        $experience = Experience::findOrFail($profile_id);
        return json_encode($experience);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        // $experience = Experience::findOrFail($id);
        // $experience->isDeleted = 1;
        // $experience->save();
    }
}
