@extends('layouts.app')

@section('content')
    <h1>Events</h1>

    <ul>
        @foreach ($events as $event)
            <li>
                {{ $event->name }}
            </li>
        @endforeach
    </ul>
@endsection
