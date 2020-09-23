@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body">
                <h4>Basic Details</h4>
                <form method="POST" action="{{ action('MatchController@store', $match->id) }}" files="true" enctype="multipart/form-data">
                @method('Patch')     
                @csrf
                    <div class="form-group mb-1 ">
                        <label for="password">Team One</label>
                        <input type="text" name="team_1" class="form-control" value="{{$match->team_1}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Team Two</label>
                        <input type="text" name="team_2" class="form-control" value="{{$match->team_2}}">
                    </div>
                    
                    <div class="form-group">
                    <label for="">Image</label> <br>
                    <input type="file"   name="logo" value="upload" class="b"   >
                </div>
                    <input type="hidden" name = "status" value="0" >

                    <button type="submit" value="upload" class="btn btn-outline-primary">Update Details</button>
                </form>
            </div>
        </div>
        <div class="card card-body">
<h4>Match  Stats & Results</h4>
<form method="POST" action="{{ action('MatchController@store', $match->id) }}" files="true" enctype="multipart/form-data">
                @method('Patch')     
                @csrf
                <div class="formgroup mb-1">
                <select class="form-control" name="team_1" required="required">
                <option value="" selected="selected" disabled="disabled">Select Match Status</option>
                
                <option value="0">Upcoming</option>
                <option value="0">Live</option>
                <option value="0">Compleated</option>
                
            </select>
                </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Score of {{$match->team1->name}}</label>
                        <input type="text" name="score1" class="form-control" placeholder="120/4 (18.4)">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Score of {{$match->team2->name}}</label>
                        <input type="text" name="score2" class="form-control" placeholder="Still to bat..">
                    </div>

                    <hr>
                   
                    <div class="form-group mb-1 ">
                        <label for="password">Final Result</label>
                        <input type="text" name="result" class="form-control" placeholder="this team  won by ** runs/  wickets">
                    </div>
                    
                   

                    <button type="submit" value="upload" class="btn btn-outline-primary">Update Details</button>
                </form>
        </div>
    </div>
</div>
                    @endsection