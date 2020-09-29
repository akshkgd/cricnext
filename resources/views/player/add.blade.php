@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
        <div class="card card-body">
        <form method="POST" action="{{ action('PlayerController@store') }}" files="true" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-1 ">
                <label for="password">Player Name</label>
                <input type="text"  name=" name" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password"> Age</label>
                <input type="text"  name="age" class="form-control" placeholder="Enter Age"  >
              </div>
              
              <div class="form-group mb-1 ">
                <label for="password">Role</label>
                <input type="text"  name="role" class="form-control" placeholder="Batsman / Bowler"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Select Team</label>
                <select class="form-control" name="team_id" required="required">
                            <option value="" selected="selected" disabled="disabled">Select Team 1</option>
                            @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
              </div>
              
              <div class="form-group mb-1 ">
                <label for="password">Matches Played</label>
                <input type="text"  name="matches" class="form-control" placeholder="matches"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Innings</label>
                <input type="text"  name="innings" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Runs</label>
                <input type="text"  name="runs" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Heighest Runs</label>
                <input type="text"  name="highest" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Average</label>
                <input type="text"  name="batting_avg" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">batting average</label>
                <input type="text"  name="batting_avg" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Strike Rate</label>
                <input type="text"  name="sr" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">100's</label>
                <input type="text"  name="100" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">50</label>
                <input type="text"  name="mrp" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Balls</label>
                <input type="text"  name="balls" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Wickets</label>
                <input type="text"  name="wickets" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Bowling Avg</label>
                <input type="text"  name="bowling_avg" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">Economy</label>
                <input type="text"  name="economy" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">5 Wickets</label>
                <input type="text"  name="5w" class="form-control" placeholder=" name"  >
              </div>
              <div class="form-group mb-1 ">
                <label for="password">10 Wickets</label>
                <input type="text"  name="10w" class="form-control" placeholder=" name"  >
              </div>
                <div class="form-group">
                    <label for="">Player Image</label> <br>
                    <input type="file"   name="image" value="upload" class="b"   >
                </div>
                <button type="submit" value="upload" class="btn btn-outline-primary">Add Player</button>   
        </form>
        </div>
       
        </div>
    </div>
</div>


@endsection