<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Event|null $event
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event = null)
    {
        if (!is_null($event)) {
            $event = Event::firstUpcoming();
        }

        //Main event page, display closest event
        return view('pages.main', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new event (admins)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store new event (admins)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Event|null $event
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event = null)
    {
        //Edit event (admins)
        if (is_null($event)) {
            //Show main edit events page
            //Create new event button, list of events to edit

            return view('admin.events.edit-main');
        }

        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update event (admins)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Stop event (admins)
    }
}
