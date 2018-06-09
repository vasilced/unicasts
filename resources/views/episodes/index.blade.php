@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="text-align:center">Welcome to Unicasts!</h1>
                
        <hr />
        
        <div class="row">
            @foreach($episodes as $episode)
                <div class="col-md-12 m-1">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title"> {{ $episode->title }} </p>
                            <p class="card-text"> {{ $episode->description }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="padding-top:150px">
        <div>       
            <p style="text-align:center;"><small><b>&copy; Unicasts 2018</b></small></p>
        </div>
    </div>
@endsection