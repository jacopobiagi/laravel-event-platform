@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    @auth
        <a href="{{ route('events.create') }}">Crea un nuovo Evento</a>
    @endauth
   

    <ul>
        @foreach ($events as $event)
            <li>
                <a href="{{ route('events.show', $event -> id) }}">{{ $event->name }}</a>
                <div><a href="{{ route('events.edit', $event->id) }}">EDIT</a></div>
                @auth
                    <form action="{{route('events.destroy', $event -> id)}}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Canc">
                    </form>
                @endauth
            </li>
        @endforeach
    </ul>
@endsection
