@extends('layout.main')

@section('content')

<main>
    <div class="container d-flex justify-content-center mt-5 mb-3">
        <div class="card my-3 mx-2" style="width: 25rem;">
            <div class="card-body">
                <h1 class="text-primary-emphasis text-center py-2">{{$movie->title}}</h1>
                <h5>Original title: {{$movie->original_title}}</h5>

                <p>Nationality: {{$movie->nationality}}</p>
                <p>Date: {{$movie->date}}</p>
                <p>Vote: {{$movie->vote}}/10</p>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-5">
        <a href="{{route('movies')}}" class="btn btn-primary p-1">Back to Films</a>

    </div>

</main>

@endsection
