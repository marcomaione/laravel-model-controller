@extends('layouts.base')

@section('pageTitle', 'home page')

@section('content')
    <h1>elenco film</h1>

    <div class="card">
        @foreach($movies as $movie)
            <h1>{{movie.title}}</h1>
            <h2>{{movie.original_title}}</h2>
            <h2>{{movie.nationality}}</h2>
            <h2>{{movie.date}}</h2>
            <h2>{{movie.vote}}</h2>
        @endforeach
    </div>













@endsection