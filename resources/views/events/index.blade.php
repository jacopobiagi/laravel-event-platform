@extends('layouts.app')

@section('content')
    <h1>Events</h1>

    <ul>
        @foreach ($events as $event)
            <li>
                <a href="{{ route('events.show', $event -> id) }}">{{ $event->name }}</a>
                <div><a href="{{ route('events.edit', $event->id) }}">EDIT</a></div>
            </li>
        @endforeach
    </ul>
@endsection
