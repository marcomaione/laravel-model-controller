<link rel="stylesheet" href="{{asset('css/app.css')}}">

@extends('layouts.base')

@section('pageTitle', 'home page')

@section('content')

    <div class="container">
        <h1>FILM</h1>
        <div class="center">
            @foreach($movies as $movie)
                <div class="card">
                    <span>{{$movie['title']}}</span>
                    <span>{{$movie['original_title']}}</span>
                    <span>{{$movie['nationality']}}</span>
                    <span>{{$movie['date']}}</span>
                    <span>vote - {{$movie['vote']}}</span>
                    
                </div>
            @endforeach
        </div>
        
    </div>













@endsection