@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body">
                <form method="POST" action="{{ action('TeamController@update', $team->id) }}" files="true" enctype="multipart/form-data">
                @method('Patch')    
                @csrf
                    <div class="form-group mb-1 ">
                        <label for="password">Team Name</label>
                        <input type="text" name=" name" class="form-control" value="{{$team->name}}">
                    </div>
                    <div class="form-group">
                    <label for="">Team logo</label> <br>
                    <input type="file"   name="logo" value="upload" class="b"   >
                </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Played</label>
                        <input type="text" name="played" class="form-control" value="{{$team->played}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Won</label>
                        <input type="text" name=" won" class="form-control" value="{{$team->won}}">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Loose</label>
                        <input type="text" name=" lose" class="form-control" value="{{$team->lose}}">
                    </div>

                    <button type="submit" value="upload" class="btn btn-outline-primary">Update {{$team->name}} details</button>
                </form>
            </div>
        </div>
    </div>
</div>
                    @endsection