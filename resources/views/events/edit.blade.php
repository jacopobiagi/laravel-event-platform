@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
    @if ($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('events.update', $event -> id)}}" method="POST">
        @csrf
        @method('PUT')
    
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="{{$event -> name}}">
        <br>
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{$event -> description}}">

        <input type="submit" value="UPDATE">
    </form>
@endsection
