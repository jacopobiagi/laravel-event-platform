@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
    <div class="text-center">
        <h1>Event Create</h1>
        <form action="{{ route('events.update', $event->id) }}" method="POST">

            @csrf
            @method('PUT')

            <label for="title">Name</label>
            <br>
            <input type="text" name="name" id="name" value="{{ $event->name }}">
            <br>
            <label for="description">Description</label>
            <br>
            <textarea name="description" id="description" cols="30" rows="10">{{ $event->description }}</textarea>
            <br>
            <label for="date">start_date</label>
            <br>
            <input type="date" name="start_date" id="start_date" value="{{ $event->getDateOnly() }}">
            <br>
            <label for="start_time">Start_ime</label>
            <br>
            <input type="time" name="start_time" id="start_time" value="{{ $event->getTimeOnly() }}">
            <br>
            <label for="date">End_date</label>
            <br>
            <input type="date" name="end_date" id="end_date" value="{{ $event->getDateOnly() }}">
            <br>
            <label for="end_time">Start_ime</label>
            <br>
            <input type="time" name="end_time" id="end_time" value="{{ $event->getTimeOnly() }}">
            <br>

            <br>
            <br>
            <h3><label for="tags">Tags</label></h3>
            @foreach ($tags as $tag)
                <div>
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag{{ $tag->id }}"
                        @foreach ($event->tags as $eventTag)
                            @if ($eventTag->id == $tag->id)
                                checked
                            @endif @endforeach>
                    <label for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                    <br>
                </div>
            @endforeach
            <input type="submit" value="UPDATE">
        </form>
    </div>
@endsection
