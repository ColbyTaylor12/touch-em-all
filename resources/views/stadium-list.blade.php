@extends('layouts.app')

@section('title', 'Stadium List')


@section('content')
<h1 style="font-weight:900">Select A Stadium</h1>
<div class="">
    <div class="card-group stadiumList">
        @foreach($stadium as $stadium)
        <div class="text-center p-5 cards">
            <div class="card p-4" style="background-color:gray; color:black;">
                <img class="card-img-left" :src="'/img/stadiums/' + {{$stadium->id}} + '.jpg'" :alt={{$stadium->id}}>
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:900;">{{$stadium->name}}</h5>
                    <ul class="card-text">
                        <li class="p-2" style="font-weight:500 "><h5>Location:</h5> {{$stadium->location}}</li>
                        <li class="p-2"><h5>Year Opened:</h5> {{$stadium->year_opened}}</li>
                        <li class="p-2"><h5>Home Team:</h5> {{$stadium->Home_team->team_name}}</li>
                    </ul>

                    <a :href="'/stadium-profile/' + {{$stadium->id}}" class="btn" style="background-color: red; font-weight:bolder; color:whitesmoke">Stadium Profile</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection