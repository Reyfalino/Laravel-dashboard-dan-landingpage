<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class eventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function make (Request $request)
    {
        $validateData = $request->validate([
            'name' => 'string|required',
            'date' => 'date|required',
            'location' => 'string|required',
            'fee' => 'string|required',
            'description' => 'string|required'

        ]);

        $event = Event::create ($validateData);

        if($event){
            return to_route('event.index')->with('Succes', 'Berhasil Menambah Data');
        } else{
            return to_route('event.index')->with('Failed', 'Gagal Menambah Data');
        }
    }

    public function edit($id)
    {
        $event = Event::where('id', $id)->first();
        return view('event.edit', compact('event'));
    }

    public function update (Request $request, Event $event)
    {
        $validateData = $request->validate([
            'name' => 'string|required',
            'date' => 'date|required',
            'location' => 'string|required',
            'fee' => 'string|required',
            'description' => 'string|required'

        ]);

        $event-> update ($validateData);

        if($event){
            return to_route('event.index')->with('Succes', 'Berhasil Menambah Data');
        } else{
            return to_route('event.index')->with('Failed', 'Gagal Menambah Data');
        }


    }

    public function hapus(Event $event){

        $event->delete();

        if($event){
            return to_route('event.index')->with('Succes', 'Berhasil Menghapus Data');
        } else{
            return to_route('event.index')->with('Failed', 'Gagal Menghapus Data');
        }

    }

}
