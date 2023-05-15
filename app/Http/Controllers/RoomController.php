<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('rooms.index');
    }
    public function create()
    {
        return view('rooms.create');
    }
    
    public function store(Request $request)
    {
        $rooms = new Room();
        $rooms->name = $request->name;
        $rooms->ability = $request->ability;
        $rooms->equipment_id = $request->equipment_id;
        $rooms->save();
        return redirect()->route('rooms')->with('message', 'room Has Been Added Seccessfuly');

    }
}
