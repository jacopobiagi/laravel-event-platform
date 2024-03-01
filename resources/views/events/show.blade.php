@extends('layouts.app')

@section('content')
    <h1>Show</h1>
    <h2>{{ $events->name }}</h2>
    <h3>{{ $events->description }}</h3>

    <h3>{{ $events->user->name }}</h3>

    <h3>Tags:</h3>
    <ul>
        @foreach ($events->tags as $tag)
            <li>{{ $tag->title }}</li>
        @endforeach
    </ul>
@endsection
