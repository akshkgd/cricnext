@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body">
                <form method="POST" action="{{ action('MatchController@store') }}" files="true" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-1 ">
                        <label for="password">Team One</label>
                        <select class="form-control" name="team_1" required="required">
                            <option value="" selected="selected" disabled="disabled">Select Team 1</option>
                            @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Team Two</label>
                        <select class="form-control" name="team_2" required="required">
                            <option value="" selected="selected" disabled="disabled">Select Team 2</option>
                            @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Image</label> <br>
                        <input type="file" name="image" value="upload" class="b">
                    </div>
                    <input type="hidden" name="status" value="0">

                    <button type="submit" value="upload" class="btn btn-outline-primary">Add Match</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection