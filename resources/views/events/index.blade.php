@extends('layouts.app')

@section('content')
    <h1>Events</h1>

    <ul>
        @foreach ($events as $event)   
            <li>
                <a href="{{ route('events.show', $event -> id) }}">{{$event -> name}}</a>
            </li>       
        @endforeach
    </ul>

    
@endsection
