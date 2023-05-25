<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $reservations = Reservation::all();
        $services = Service::all();
        return view('services.index', compact('reservations', 'services', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = DB::table('users')->where('profil', 'chefService')->orwhere('profil', 'user')->orwhere('profil', 'reponsable')->get();
        $reservations = Reservation::all();
        return view('services.create', compact('reservations', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $services = new Service();

        $services->name = $request->name;
        $services->user_id = $request->user_id;
        $services->description = $request->description;

        $services->save();

        return redirect()->route('services.index')->with('message', 'service has been created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}