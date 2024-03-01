@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    @auth
        <a href="{{ route('events.create') }}">Crea un nuovo Evento</a>
    @endauth
   

    <ul>
        @foreach ($events as $event)   
            <li>
                {{$event -> name}}
            </li>       
        @endforeach
    </ul>

    
@endsection
