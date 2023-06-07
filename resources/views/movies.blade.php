@extends('layout.main')

@section('content')

<main>
    <div class="container">
        <h1>MOVIES</h1>

        <div class="d-flex flex-wrap justify-content-center">

            @foreach ($movies as $movie)

            <div class="card m-3" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Title: {{$movie->title}}</h5>
                    <p class="card-text">Original title: {{$movie->original_title}}</p>
                    <a href="#" class="btn btn-primary">Dettagli</a>
                </div>
            </div>

            @endforeach

        </div>




    </div>
</main>

@endsection
