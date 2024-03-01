@extends('layouts.app')

@section('content')

    <h1>Crea un nuovo evento</h1>

        <form action="{{ route('events.store') }}" method="POST">

            @csrf
            @method('POST')
            

            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="description">description</label>
            <input type="text" name="description" id="description">
            <br>
            <label for="start_date">Data inizio</label>
            <input type="date" name="start_date" id="start_date">
            <br>
            <label for="end_date">Data fine</label>
            <input type="date" name="end_date" id="end_date">
            <br>
            <label for="tags">Tags</label>
            <br>
            @foreach($tags as $tag)
                <div>
                    <input type="checkbox" name="tags[]" value="{{ $tag -> id }}" id="tag{{ $tag -> id }}">
                    <label for="tag{{ $tag -> id }}">{{ $tag -> title }}</label>
                    <br>
                </div>
            @endforeach
            <input type="submit" value="invia">


        </form>

@endsection

<style>
    form{
        display: block;
    }
</style>
