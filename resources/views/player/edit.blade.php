@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body">
                <div class="text-center">
                    <img src="{{asset('/storage/'. $player->image)}}" class="avatar" alt="">
                    <h3>{{$player->name}}</h2>
                        <br>
                        <br>
                        <h4>Edit Detils</h4>
                </div>
                <form method="POST" action="{{ action('PlayerController@update', $player->id) }}" files="true" enctype="multipart/form-data">
                    @method('Patch')
                    @csrf
                    <div class="form-group mb-1 ">
                        <label for="password">Player Name</label>
                        <input type="text" name=" name" class="form-control" value="{{$player->name}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Birthday</label>
                        <input type="text" name="age" class="form-control" value="{{$player->age}}">
                    </div>

                    <div class="form-group mb-1 ">
                        <label for="password">Role</label>
                        <input type="text" name="role" class="form-control" value="{{$player->role}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Select Team</label>
                        <input type="text" name="team_id" class="form-control" value="{{$player->team_id}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Is captian</label>
                        <input type="text" name="is_captian" class="form-control" value="{{$player->is_captian}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Matches Played</label>
                        <input type="text" name="matches" class="form-control" value="{{$player->matches}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Innings</label>
                        <input type="text" name="innings" class="form-control" value="{{$player->innings}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Runs</label>
                        <input type="text" name="runs" class="form-control" value="{{$player->runs}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Heighest Runs</label>
                        <input type="text" name="highest" class="form-control" value="{{$player->highest}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Average</label>
                        <input type="text" name="batting_avg" class="form-control" value="{{$player->batting_avg}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">batting average</label>
                        <input type="text" name="batting_avg" class="form-control" value="{{$player->batting_avg}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Strike Rate</label>
                        <input type="text" name="sr" class="form-control" value="{{$player->sr}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">100's</label>
                        <input type="text" name="hundred" class="form-control" value="{{$player->hundred}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">50</label>
                        <input type="text" name="fifty" class="form-control" value="{{$player->fifty}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Balls</label>
                        <input type="text" name="balls" class="form-control" value="{{$player->balls}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Wickets</label>
                        <input type="text" name="wickets" class="form-control" value="{{$player->wickets}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Bowling Avg</label>
                        <input type="text" name="bowling_avg" class="form-control" value="{{$player->bowling_avg}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Economy</label>
                        <input type="text" name="economy" class="form-control" value="{{$player->economy}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">5 Wickets</label>
                        <input type="text" name="w5" class="form-control" value="{{$player->w5}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">10 Wickets</label>
                        <input type="text" name="w10" class="form-control" value="{{$player->w10}}">
                    </div>
                    <div class="form-group">
                        <label for="">Player Image</label> <br>
                        <input type="file" name="image" value="upload" class="b">
                    </div>
                    <button type="submit" value="upload" class="btn btn-outline-primary">Add Player</button>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection