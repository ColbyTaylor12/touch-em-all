@extends('layouts.app')

@section('title', 'Stadium Profile')

@section('content')
<h1 style="font-weight:900;">{{$stadium_profile -> Stadium -> name }}</h1>
        <div class="card">
          <img class="card-img-left" src="/img/stadiumsMain/{{$stadium_profile -> Stadium -> id }}.jpg" alt="{{$stadium_profile -> Stadium -> name }}">
        </div>
        <h1 class="pt-3">Average Stadium Prices</h1>
        <div class="row pt-1" style="border: 5px dotted red;">
        <div class="col-6" style="text-align: right;">
                {{-- <h2>Current Year:</h2> --}}
                <h3>Ticket Price:</h3>
                <h3>Beer Price:</h3>
                <h3>Soda Price:</h3>
                <h3>Hotdog Price:</h3>
        </div>
<div class="col-6" style="text-align: left;">
{{-- <h2>{{$stadium_profile -> current_year}}</h2> --}}
<h3>${{$stadium_profile -> ticket}}</h3>
<h3>${{$stadium_profile -> beer}}</h3>
<h3>${{$stadium_profile -> soda}}</h3>
<h3>${{$stadium_profile -> hot_dog}}</h3>
</div>
</div>
{{-- <stadium-profile :ticket="{{ $stadium_profile->ticket }}"></stadium-profile> --}}
@endsection

@section('script')
<script>

    </script>
@endsection