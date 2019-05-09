<?php

namespace App\Http\Controllers;

use App\UserProfile;
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
        //
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

        $user_profile->username = request('username');
        $user_profile->home_stadium = request('home_stadium');

        $user_profile->save();

        return redirect('/home');
         
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function show(user_profile $user_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(user_profile $user_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_profile $user_profile)
    {
        //
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
