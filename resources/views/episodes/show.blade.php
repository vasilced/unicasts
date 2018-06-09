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
                @endforeach

            </div>
        </div>
    </div>

@endsection