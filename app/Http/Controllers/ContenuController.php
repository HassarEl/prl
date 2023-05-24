<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Equipment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\EquipmentRoom;

class ContenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        $content = EquipmentRoom::all();
        $salles = Room::all();
        $equipments = Equipment::all();
        return view('salleequipment.index', compact('reservations', 'equipments', 'salles'));
    }

    public function centent(Request $request)
    {
        $reservations = Reservation::all();
        $equipments = Equipment::all();
        $salle = Room::find($request->room);
        // $equipment_salle = Room::find($request->salle)->equipments()->get();
        $contents = EquipmentRoom::all()->where('room_id', $request->room);
         return view('salleequipment.content', compact('reservations', 'equipments','salle', 'contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservations = Reservation::all();
        $salles = Room::all();
        $equipments = Equipment::all();
        return view('salleequipment.create', compact('reservations', 'equipments', 'salles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $salles = Room::all();
        $equipments = Equipment::all();
        
        foreach($request->equipment as $key=>$equipment){
            $data = new EquipmentRoom();
            $data->equipment_id = $equipment;
            $data->room_id = $request->salle;
            $data->quantite = $request->quantite[$key];
            $data->save();
        }

        return redirect()->route('contenu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EquipmentRoom $equipmentRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EquipmentRoom $equipmentRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EquipmentRoom $equipmentRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        EquipmentRoom::destroy($id);
        return redirect()->route('contenu.index')->with('message', 'Equipment has been remouved from room');
    }
}
