@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Welcome to Unicasts!</h1>
                
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
@endsection