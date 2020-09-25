@extends('layouts.cric')

@section('content')

<div class="main-container">
    <section class="space-lg bg-white">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-12 col-md-6 col-lg-5 text-center text-md-left section-intro">
                    <h1 class="display-3"> Cricket Live <br> <b>Cricnext</b></h1>
                    <span class="lead">
                        Cricket Lover?? Never miss an single run. Just visit Cricnext for amazing experience.
                    </span>
                    <a href="{{url('/')}}" class="btn btn-success btn-lg">Visit now</a>
                </div>
                <!--end of col-->
                <div class="col-12 col-md-6 col-lg-6">
                    <img alt="Image" class="img-fluid rounded shadow" src="{{asset('/img/cric.png')}}" />
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <div class="container">
        <h4 class="display-4 text-center pb-5 ">People are loving <b>Cricnext</b> </h4>
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 col-lg-5">
                <div class="media">
                    <img alt="Image" src="assets/img/avatar-male-1.jpg" class="avatar" />
                    <div class="media-body">
                        <p class="mb-1">
                            “Let’s get one thing straight, this website a straight-up winner. No posers here, just beautiful design and code.”
                        </p>
                        <small>Risabh Gupta</small>
                    </div>
                </div>
            </div>
            <!--end of col-->

            <div class="col-12 col-md-6 col-lg-5">
                <div class="media">
                    <img alt="Image" src="assets/img/avatar-female-1.jpg" class="avatar" />
                    <div class="media-body">
                        <p class="mb-1">
                            “With cricnext, we were able to get live scores and updates in no time.”
                        </p>
                        <small>Charith Reddy</small>
                    </div>
                </div>
            </div>
        </div>


        <div class="container pt-5">
            <h4 class="display-4 text-center pb-5 ">Amazing Developers of <b>Cricnext</b> </h4>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <div class="card card-body" style="border-radius:10px">
                        <div class="text-center">
                            <img src="{{asset('/img/2.jpg')}}" alt="" class="avatar shadow">
                            <h5 class="pt-2">Lovelesh Singh</h3>
                                <p>Ewing Christian College, Prayagraj <br>ECC1705028 </p>
                                <div class="">
                                    <div>

                                        <a href="" class="card-link text-dark"><i class="fi fi-github"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-linkedin"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-twitter"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-facebook"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-whatsapp"></i></a>

                                    </div>

                                </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card card-body" style="border-radius:10px">
                        <div class="text-center">
                            <img src="{{asset('/img/1.jpg')}}" alt="" class="avatar shadow">
                            <h5 class="pt-2">Lovelesh Singh</h3>
                                <p>Ewing Christian College, Prayagraj <br>ECC1705032 </p>
                                <div class="">
                                    <div>

                                        <a href="" class="card-link text-dark"><i class="fi fi-github"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-linkedin"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-twitter"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-facebook"></i></a>
                                        <a href="" class="card-link text-dark"><i class="fi fi-whatsapp"></i></a>

                                    </div>

                                </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        @endsection()