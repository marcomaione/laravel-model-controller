@extends('layouts.base')

@section('pageTitle', 'home page')

@section('content')
    <h1>elenco film</h1>

    <div class="card">
        @foreach($movies as $movie)
            <h1>{{$movie['title']}}</h1>
            <h2>{{$movie['original_title']}}</h2>
            
        @endforeach
    </div>













@endsection