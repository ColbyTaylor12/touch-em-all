@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')
<h1>How was your experience?</h1>
<form class="pt-5" method="POST" action="create_experience" enctype="multipart/form-data" style="">
    {{csrf_field()}}
    <div class="form-group">
        <label for="stadium_visited">
            <h2>Which stadium did you visit?</h2>
        </label>
        <select class="form-control" id="stadium_visited" name="stadium_visited">
            <option value=""></option>
            <option value="1">Busch Stadium</option>
            <option value="2">Dodger Stadium</option>
            <option value="3">Citizens Bank Park</option>
            <option value="4">Chase Field</option>
            <option value="5">Petco Park</option>
            <option value="6">Wrigley Field</option>
            <option value="7">Miller Park</option>
            <option value="8">Citi Field</option>
            <option value="9">Suntrust Park</option>
            <option value="10">PNC Park</option>
            <option value="11">Coors Field</option>
            <option value="12">Nationals Park</option>
            <option value="13">Great American Ball Park</option>
            <option value="14">Oracle Park</option>
            <option value="15">Marlins Park</option>
            <option value="16">Tropicana Field</option>
            <option value="17">Target Field</option>
            <option value="18">Minute Maid Park</option>
            <option value="19">Yankee Stadium</option>
            <option value="20">Progressive Field</option>
            <option value="21">T-Mobile Park</option>
            <option value="22">Globe Life Park</option>
            <option value="23">Rogers Centre</option>
            <option value="24">Comerica Park</option>
            <option value="25">Guaranteed Rate Field</option>
            <option value="26">Oakland Coliseum</option>
            <option value="27">Fenway Park</option>
            <option value="28">Angel Stadium</option>
            <option value="29">Camden Yards</option>
            <option value="30">Kauffman Stadium</option>
        </select>
    </div>
    <div class="form-group">
        <label for="day_visited">
            <h2>When did you visit?</h2>
        </label>
        <input type="day_visited" class="form-control" id="day_visited" name="day_visited" placeholder="ex: mm/dd/yyyy">
    </div>
    <div class="form-group">
        <label for="ticket">
            <h2>Ticket Price</h2>
        </label>
        <input type="ticket" class="form-control" id="ticket" name="ticket" placeholder="ex: 3.50">
    </div>
    <div class="form-group">
        <label for="beer">
            <h2>Beer Price</h2>
        </label>
        <input type="beer" class="form-control" id="beer" name="beer" placeholder="ex: 6.50">
    </div>
    <div class="form-group">
        <label for="soda">
            <h2>Soda Price</h2>
        </label>
        <input type="soda" class="form-control" id="soda" name="soda" placeholder="ex: 2.50">
    </div>
    <div class="form-group">
        <label for="hot_dog">
            <h2>Hot Dog Price</h2>
        </label>
        <input type="hot_dog" class="form-control" id="hot_dog" name="hot_dog" placeholder="ex: 1.50">
    </div>
    <div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@endsection