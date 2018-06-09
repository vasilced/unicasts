@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-1">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title"> {{ $episode->title }} </p>
                        <p class="card-text"> {{ $episode->description }} </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
    </div>

@endsection