@extends('layouts.layout')

@section('content')
<div class="container" id="homepage">
    <div class="row justify-content-center">
        <div class="col-12">
            {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> --}}
            <profile-header></profile-header>
            <h1>My Experiences</h1>
            {{-- <h1>{{$id}}</h1> --}}
            <feed></feed>
        </div>
    </div>
</div>

@endsection
