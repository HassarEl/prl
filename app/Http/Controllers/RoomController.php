<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Equipment;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $equipments = Equipment::all();
        return view('rooms.index', compact('equipments', 'rooms'));
    }
    public function create()
    {
        $equipments = Equipment::all();
        return view('rooms.create', compact('equipments'));
    }
    
    public function store(Request $request)
    {
        $rooms = new Room();
        $rooms->name = $request->name;
        $rooms->quantite = $request->quantite;
        $rooms->equipment_id = $request->equipment_id;
        $rooms->descriptions = $request->descriptions;
        $rooms->etage = $request->etage;
        $rooms->number = $request->number;
        $rooms->save();
        return redirect()->route('salles')->with('message', 'room Has Been Added Seccessfuly');

    }public function show(string $id)
    {
        $room = Room::find($id);
        return view('rooms.show', compact('room'));
    }

    public function edit(string $id)
    {
        $room = Room::find($id);
        $equipments = Equipment::all();

        return view('rooms.edit', compact('room', 'equipments'));
    }

    public function update(Request $request, string $id)
    {
        $room = Room::find($id);

        $room->name = $request->name;
        $room->quantite = $request->quantite;
        $room->equipment_id = $request->equipment_id;
        $room->descriptions = $request->descriptions;
        $room->etage = $request->etage;
        $room->number = $request->number;
        $room->save();

        return redirect()->route('salles')->with('message', 'Salle Has Been Updated Seccessfuly');
    }



    public function destroy(string $id)
    {
        Room::destroy($id);

        return redirect()->route('salles')->with('message', 'Salle Has Been Deleted');
    }
}
