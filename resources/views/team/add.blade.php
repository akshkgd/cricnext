@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body">
                <form method="POST" action="{{ action('TeamController@store') }}" files="true" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-1 ">
                        <label for="password">Team Name</label>
                        <input type="text" name=" name" class="form-control" placeholder=" name">
                    </div>
                    <div class="form-group">
                    <label for="">Team logo</label> <br>
                    <input type="file"   name="logo" value="upload" class="b"   >
                </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Played</label>
                        <input type="text" name="played" class="form-control" placeholder=" played">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Won</label>
                        <input type="text" name=" won" class="form-control" placeholder="won">
                    </div>
                    <div class="form-group mb-1 ">
                        <label for="password">Loose</label>
                        <input type="text" name=" lose" class="form-control" placeholder="loose">
                    </div>

                    <button type="submit" value="upload" class="btn btn-outline-primary">Add Team</button>
                </form>
            </div>
        </div>
    </div>
</div>
                    @endsection