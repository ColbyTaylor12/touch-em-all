<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserProfile::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return UserProfile::create([
            'username' => $data['username'],
            'home_stadium' => $data['home_stadium'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_profile = new UserProfile();
            $user_profile->username = $request['username'];
            $user_profile->home_stadium = $request['home_stadium'];
            $user_profile->user_id = Auth::user()->id;
        $user_profile->save();
        

        return redirect('/home');
         
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $user_profile = UserProfile::findOrFail($id);
        return json_encode($user_profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $user_profile = UserProfile::findOrFail($id);
        return view('user_profile.edit', compact('user_profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $id = Auth::user()->id;
        $user_profile = UserProfile::findOrFail($id);

        $user_profile->username = request('username');
        $user_profile->home_stadium = request('home_stadium');

        $user_profile->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_profile $user_profile)
    {
        //
    }
}
