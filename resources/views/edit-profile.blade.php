@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')
<h1>Create Your Profile</h1>
<form class="pt-5" method="POST" action="{{route('edit_profile.update', ['id'=>Auth::user()])}}" enctype="multipart/form-data">  
    {{csrf_field()}}
    {{-- {{method_field('PATCH')}} --}}
        <div class="form-group">
          <label for="username"><h2>Create Username</h2></label>
          <input type="username" class="form-control" id="username" name="username" type="hidden" value="PATCH" placeholder="username">
        </div>
        <div class="form-group">
          <label for="home_stadium"><h2>Home Stadium</h2></label>
          <select class="form-control" id="home_stadium" name="home_stadium">
            <option value=""></option >
            <option value="1">Busch Stadium</option>
            <option value="2">Dodger Stadium</option>
            <option value="3">Citizens Bank Park</option>
            <option value="4">Chase Field</option>
            <option value="5">Petco Park</option>
            <option value="6">Wrigley Field</option >
            <option value="7">Miller Park</option >
            <option value="8">Citi Field</option >
            <option value="9">Suntrust Park</option >
            <option value="10">PNC Park</option >
            <option value="11">Coors Field</option >
            <option value="12">Nationals Park</option >
            <option value="13">Great American Ball Park</option >
            <option value="14">Oracle Park</option >
            <option value="15">Marlins Park</option >
            <option value="16">Tropicana Field</option >
            <option value="17">Target Field</option >
            <option value="18">Minute Maid Park</option >
            <option value="19">Yankee Stadium</option >
            <option value="20">Progressive Field</option >
            <option value="21">T-Mobile Park</option >
            <option value="22">Globe Life Park</option >
            <option value="23">Rogers Centre</option >
            <option value="24">Comerica Park</option >
            <option value="25">Guaranteed Rate Field</option >
            <option value="26">Oakland Coliseum</option >
            <option value="27">Fenway Park</option >
            <option value="28">Angel Stadium</option >
            <option value="29">Camden Yards</option >
            <option value="30">Kauffman Stadium</option >
          </select>
        </div>
        <div>
            <button type="submit"class="btn btn-primary">
                Done
            </button>
        </div>
      </form>
@endsection