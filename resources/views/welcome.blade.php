@extends('layouts.cric')


@section('content')

<div class="main-container">

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-auto mb-5">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div>
                <span class="h6">Latest Results</span>
              </div>
              <a href="#">View all &rsaquo;</a>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-spacing-sm">
@foreach($results as $result)
                <li>
                  <a class="media" href="#">
                    <div class="media-body">
                      <span class="h6 mb-0">{{$result->team1->name}} Vs {{$result->team2->name}}</span>
                      <span class="text-muted">{{$result->result}}</span>
                    </div>
                  </a>
                </li>
@endforeach
               
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div>
                <span class="h6">Top 3 Batsman</span>
              </div>
              <a href="#">View all &rsaquo;</a>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-spacing-sm">
                @foreach($batsman as $bt)
                <li>
                  <a class="media" href="#">
                    <img alt="Image" src="{{asset('storage/'. $bt->image)}}" class="avatar avatar-sm mr-3" />
                    <div class="media-body">
                      <span class="h6 mb-0">{{$bt->name}}</span>
                      <span class="text-muted">Runs: {{$bt->runs}}</span>
                    </div>
                  </a>
                </li>
                @endforeach

              </ul>
            </div>
          </div>

          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div>
                <span class="h6">Top 3 Bowlers</span>
              </div>
              <a href="#">View all &rsaquo;</a>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-spacing-sm">

                @foreach($bowlers as $bw)
                <li>
                  <a class="media" href="#">
                    <img alt="Image" src="{{asset('storage/'. $bw->image)}}" class="avatar avatar-sm mr-3" />
                    <div class="media-body">
                      <span class="h6 mb-0">{{$bw->name}}</span>
                      <span class="text-muted">Wickets: {{$bw->wickets}}</span>
                    </div>
                  </a>
                </li>
                @endforeach


              </ul>
            </div>
          </div>



          
        </div>

        <!--end of col-->
        <div class="col">
        <div class="mb-2">
              <img src="{{asset('/img/bg.webp')}}" alt="" class="img-fluid rounded">
            </div>
            @if($live->count()> 0)
          <div class="card card-sm">
            
            <div class="card-header d-flex bg-secondary justify-content-between align-items-center">
              <div>
                <h6>Live Matches</h6>
              </div>

            </div>
            <ul class="list-group list-group-flush">
@foreach($live as $l)
              <li class="list-group-item">
                <div class="media align-items-center">
                  <a href="#" class="mr-4">
                    <img alt="Image" src="{{asset('/storage/'. $l->image)}}" class="rounded avatar avatar-lg" />
                  </a>
                  <div class="media-body">
                    <div class="d-flex justify-content-between mb-2">
                      <div>
                        <a href="#" class="mb-1">
                          <h4>{{$l->team1->name}} Vs {{$l->team2->name}}</h4>
                        </a>
                        <span>{{$l->team1->name}}: {{$l->score1}} </span> <br>
                        <span> {{$l->team2->name}}: {{$l->score2}}</span>
                      </div>

                    </div>
                    <a class="badge badge-secondary badge-pill mb-2" href="#">Live</a>
                    <div class="text-small">
                      <ul class="list-inline">
                        <!-- <li class="list-inline-item"><i class="icon-heart"></i> 221</li> -->

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
@endforeach
              
            </ul>
          </div>
          @endif

          <div class="card card-sm">
            <div class="card-header d-flex bg-secondary justify-content-between align-items-center">
              <div>
                <h6>Upcoming Matches</h6>
              </div>

            </div>
            <ul class="list-group list-group-flush">
            @foreach($upcoming as $u)
              <li class="list-group-item">
                <div class="media align-items-center">
                  <a href="#" class="mr-4">
                    <img alt="fgfk" src="{{asset('/storage/'. $u->image)}}" class="rounded avatar avatar-lg" />
                  </a>
                  <div class="media-body">
                    <div class="d-flex justify-content-between mb-2">
                      <div>
                        <a href="#" class="mb-1">
                          <h4>{{$u->team1->name}} Vs {{$u->team2->name}}</h4>
                        </a>
                        
                      </div>

                    </div>
                    <a class="badge badge-secondary badge-pill mb-2" href="#">upcoming</a>
                    <div class="text-small">
                      <ul class="list-inline">
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach

              
            </ul>
          </div>
        </div>
        <!--end of col-->
        <div class="col-lg-3">
          <div data-sticky="top">
            <div class="card card-borderless bg-secondary" >
              <a class="card-body" href="#">
                <div class="d-flex justify-content-between mb-3">
                  Codekaro
                  <span class="title-decorative">Sponsor</span>
                </div>
                <span class="h6">Learn to code like a pro</span>
              </a>
            </div>
            <!-- end card -->
            <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div>
                <span class="h6">Top 3 Teams</span>
              </div>
              <a href="#">View all &rsaquo;</a>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-spacing-sm">

                @foreach($teams as $t)
                <li>
                  <a class="media" href="#">
                    <img alt="Image" src="{{asset('storage/'. $t->logo)}}" class="avatar avatar-sm mr-3" />
                    <div class="media-body">
                      <span class="h6 mb-0">{{$t->name}}</span>
                      <span class="text-muted">Won: {{$bw->won}}</span>
                    </div>
                  </a>
                </li>
                @endforeach


              </ul>
            </div>
          </div>
            <div class="card">
              <div class="card-body">
                <h6>Never miss an update ✌</h6>
                <form>
                  <div class="form-group mb-2">
                    <input type="email" placeholder="Email Address" name="subscribeEmail" class="form-control" />
                    <small>No spam, we promise.</small>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
          <!-- end of sticky-->
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  @endsection