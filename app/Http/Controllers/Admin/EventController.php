<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Event;
use App\Models\Tag;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event :: all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event :: all();
        $tags = Tag :: all();
        return view('events.create', compact('events', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
            
        $event = new Event();

        $event -> name = $data['name'];
        $event -> description = $data['description'];
        $event -> start_date = $data['start_date'];
        $event -> end_date = $data['end_date'];

        $event -> save();

        $event -> tags() -> attach($data['tags']);

        return redirect() -> route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event:: find($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event :: find($id);
        $tags = Tag :: all();

        return view('events.edit', compact('event', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request -> all();

        $event = Event :: find($id);

        $event -> name = $data['name'];
        $event -> description = $data['description'];
        $event -> start_date = $data['start_date'] . ' ' . $data['start_time'];
        $event -> end_date = $data['end_date'] . ' ' . $data['end_time'];


        $event -> save();

        $event -> tags() -> sync($data['tags']);

        return redirect() -> route('events.show', $event -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event:: find($id);

        $event -> tags() -> detach();
        $event -> delete();

        return redirect() -> route('events.index');
    }
}
