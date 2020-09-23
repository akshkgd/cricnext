@extends('layouts.cric')
@section('content')
<style>
    section{
        padding:none;
    }
</style>
<section class="bg-white" style="padding:none;" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="media">
                    <img alt="Image" src="{{asset('/storage/' . $player->image)}}" class="mr-md-5 avatar avatar-xlg" />
                    <div class="media-body">
                        <div class="mb-3">
                            <h1 class="h2 mb-2">{{$player->name}}</h1>
                            <span class="text-muted"><i class="icon-location"></i> Age {{$player->age}}</span>
                        </div>
                        <p>
                            {{$player->desc}}
                        </p>
                        <div>

                            <div class="dropdown d-inline-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of col-->
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section class="bg-white" style="padding:none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h4>Batting Stats </h4>
                <div class="media">

                    <table class="table table-bordered">

                        <thead class="bg-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Matches</th>
                                <th scope="col">Runs</th>
                                <th scope="col">Strike Rate</th>
                                <th>Average</th>
                                <th>100's</th>
                                <th>50's</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$player->matches}}</td>
                                <td>{{$player->runs}}</td>
                                <td>{{$player->sr}}</td>
                                <td>{{$player->batting_avg}}</td>
                                <td>{{$player->hundred}}</td>
                                <td>{{$player->fifty}}</td>
                            </tr>
                            
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:none;">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h4>Bowling Stats </h4>
                <div class="media">

                    <table class="table table-bordered">

                        <thead class="bg-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Matches</th>
                                <th scope="col">Wickets</th>
                                <th scope="col">Economy</th>
                                <th>Average</th>
                                <th>5W</th>
                                <th>10W</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$player->matches}}</td>
                                <td>{{$player->wickets}}</td>
                                <td>{{$player->sr}}</td>
                                <td>{{$player->bowling_avg}}</td>
                                <td>{{$player->w5}}</td>
                                <td>{{$player->w10}}</td>
                            </tr>
                            
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection