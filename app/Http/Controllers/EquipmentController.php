<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Reservation;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        $equipments = Equipment::all();
        return view('equipments.index', compact('reservations', 'equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservations = Reservation::all();
        return view('equipments.create', compact('reservations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        
        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(\public_path('assets/files/'),$fileName);


        $equipment = new Equipment();
        $equipment->name = $request->name;
        $equipment->disponibilite = $request->disponibilite;
        // $equipment->quantite = $request->quantite;
        $equipment->description = $request->description;
        $equipment->image = $fileName;
        $equipment->save();
        return redirect()->route('equipment.index')->with('message', 'Equipment Has Been Added Seccessfuly');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservations = Reservation::all();
        $equipment = Equipment::find($id);
        return view('equipments.show', compact('equipment', 'reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservations = Reservation::all();
        $equipment = Equipment::find($id);

        return view('equipments.edit', compact('equipment', 'reservations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipment = Equipment::find($id);

        if($request->file('file') != null)
        {
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('assets/files/'),$fileName);

            $equipment->image = $fileName;
        } 
        

        
        $equipment->name = $request->name;
        $equipment->disponibilite = $request->disponibilite;
        $equipment->description = $request->description;
        
        $equipment->save();

        return redirect()->route('equipment.index')->with('message', 'Equipment Has Been Updated Seccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Equipment::destroy($id);

        return redirect()->route('equipment.index')->with('message', 'Equipment Has Been Deleted');
    }
}
