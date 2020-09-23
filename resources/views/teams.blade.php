@extends('layouts.cric')
@section('content')
<section class="space-sm">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-9 mb-1 order-md-2">
              <div class="card card-sm">
                <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                  <div>
                    <h6>All Teams</h6>
                  </div>
                  <form class="d-flex align-items-center">
                    <span class="mr-2 text-muted text-small text-nowrap">Sort by:</span>
                    <select class="custom-select">
                      <option value="old-new" selected>Newest</option>
                      <option value="new-old">Popular</option>
                      <option value="most">Most Comments</option>
                    </select>
                  </form>
                </div>
                <div class="list-group list-group-flush">
@foreach($teams as $t)
                  <a class="list-group-item list-group-item-action" href="{{action('HomeController@team_details', $t->id)}}">
                    <div class="media">
                      <img alt="Image" src="{{asset('/storage/'. $t->logo)}}" class="avatar" />
                      <div class="media-body">
                        <div>
                          <span class="text-muted text-small">{{$t->name}}</span>
                          <h5 class="h6 mb-1">Let's keep those protoypes 100
                            <span class="badge badge-indicator badge-success">&nbsp;</span>
                          </h5>
                          <ul class="list-inline text-small text-muted">
                            <li class="list-inline-item"><i class="icon-code mr-1"></i>PLayed {{$t->played}}</li>
                            <li class="list-inline-item"><i class="icon-message mr-1"></i>Won {{$t->won}}</li>
                            <li class="list-inline-item"><i class="icon-message mr-1"></i>Loose {{$t->lose}}</li>
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                  </a>
                  @endforeach
@endsection