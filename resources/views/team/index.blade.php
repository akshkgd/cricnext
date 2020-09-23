@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            @foreach($teams as $team)
            <div class="card card-body ">
                <div class="dropdown card-options">
                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <i class="material-icons">more_vert</i> -->
                        <svg class="bi bi-three-dots-vertical" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{action('TeamController@edit', $team->id)}}">Edit</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{route('team.destroy', [$team->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-info" value="Delete" />
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-between ">
                    <div class="d-flex">
                        <img src="{{asset('/storage/'. $team->image)}}" class="avatar" alt="">
                        <h3>{{$team->name}}</h2>
                    </div>
                    <div>
                        <h4>Matches Played</h4>
                    <h4>{{$team->played}}</h4>
                    </div>
                    <div>
                        <h4>Matches Won</h4>
                    <h4>{{$team->won}}</h4>
                    </div>
                    
                </div>


            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection