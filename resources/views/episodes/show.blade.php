@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-1">
                <h1> {{ $episode->title }} </h1>
                <hr />

                <p> {{ $episode->description }} </p>

                <span><u><b>notes:</b></u></span>

                @foreach($episode->notes as $note)
                    <div> &ndash; {{ $note->summary }} </div>
                        @foreach($note->links as $link)
                            <div> <a href="{{ $link->path }}">{{ $link->path }} </a> </div>
                        @endforeach
                @endforeach

            </div>
        </div>
        <a href=" {{ route('episodes.index') }}" 
           class="btn btn-outline-primary btn-block m-1">
           Back to all episodes
        </a>
    </div>

@endsection