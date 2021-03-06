<?php

namespace App\Http\Controllers;

use App\Stadium;
use App\Team;
use Illuminate\Http\Request;


class StadiumController extends Controller
{
    
    public function index()
    {
        return Stadium::all();   
    }

    
    public function getAllStadiums()
    {
        $stadium = Stadium::with("home_team")->get();
        return view('stadium-list', compact('stadium'));
    }

    
    public function store(Request $request)
    {
        //
    }

  
    public function show(Request $request)
    {
        //dd($request);
        $id = $request->id;
        $stadium = Stadium::findOrFail($id);
        return json_encode($stadium);
    }

   
    public function edit(stadiums $stadiums)
    {
        //
    }


    public function update(Request $request, stadiums $stadiums)
    {
        //
    }

    
    public function destroy(stadiums $stadiums)
    {
        //
    }
}
