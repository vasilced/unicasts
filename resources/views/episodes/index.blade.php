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
                            <a href=" {{ route('episodes.show', $episode) }}">
                                <p class="card-title"> {{ $episode->title }} </p>
                            </a>
                            <p class="card-text"> {{ $episode->description }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <span class="m-1"> {{ $episodes->links() }} </span>

    </div>
    
@endsection