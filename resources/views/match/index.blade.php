@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">

        @foreach($matches as $match)
        <div class="col-md-6 ">

            <div class="card card-body ">
                <div class="dropdown card-options">
                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <i class="material-icons">more_vert</i> -->
                        <svg class="bi bi-three-dots-vertical" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{action('MatchController@edit', $match->id)}}">Edit</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{route('match.destroy', [$match->id])}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-info" value="Delete" />
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-around ">
                    <div class="d-flex">

                        <h3>{{$match->team1->name}}</h2> vs
                            <h3>{{$match->team2->name}}</h2>

                    </div>
                    <div>

                    </div>
                    

                    @if($match->status == 2)
                    <div class="text-left pr-3">
                    <h5 class="text-success ">Match Compleated</h3>
                    <h5>{{$match->result}}</h5>
                    </div>
                    
                    @endif
                    <div class="">
                        <a href="{{action('MatchController@edit', $match->id)}}">Update Scores</a>
                    </div>
                </div>


            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection