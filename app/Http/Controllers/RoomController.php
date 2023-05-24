<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Equipment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\EquipmentRoom;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $equipments = Equipment::all();
        $reservations = Reservation::all();
        return view('rooms.index', compact('equipments', 'rooms', 'reservations'));
    }
    public function create()
    {
        $reservations = Reservation::all();
        $equipments = Equipment::all();
        return view('rooms.create', compact('equipments', 'reservations'));
    }
    
    public function store(Request $request)
    {

        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(\public_path('assets/files/'), $fileName);

        $rooms = new Room();
        $rooms->name = $request->name;
        $rooms->capacite = $request->capacite;
        // $rooms->equipment_id = $request->equipment_id;
        $rooms->descriptions = $request->descriptions;
        $rooms->etage = $request->etage;
        $rooms->number = $request->number;
        $rooms->image = $fileName;

        // $equipment_rooms = new EquipmentRoom();
        // $equipment_rooms->equipment_id = $request->equipment_id;
        // $equipment_rooms->room_id = 1;
        // $equipment_rooms->save();
        // $rooms->equipment()->sync($request->equipment_id);

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

        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(\public_path('assets/files/'), $fileName);

        $room = Room::find($id);

        $room->name = $request->name;
        $room->capacite = $request->capacite;
        // $room->equipment_id = $request->equipment_id;
        $room->descriptions = $request->descriptions;
        $room->etage = $request->etage;
        $room->number = $request->number;
        $room->image = $fileName;
        $room->save();

        return redirect()->route('salles')->with('message', 'Salle Has Been Updated Seccessfuly');
    }



    public function destroy(string $id)
    {
        Room::destroy($id);

        return redirect()->route('salles')->with('message', 'Salle Has Been Deleted');
    }
}
