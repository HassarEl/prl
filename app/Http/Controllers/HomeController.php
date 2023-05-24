<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        $reservations = Reservation::all();

        if(Auth::id())
        {
            if(Auth::user()->profil=='admin')
            {   
                return view('admin.index', compact('reservations'));
            }
            else if(Auth::user()->profil=='chefService')
            {  
                return view('chefService.index', compact('reservations'));
            }
            else if(Auth::user()->profil=='user') 
            {
                return view('visiteurs.index', compact('reservations'));
            }
            else if(Auth::user()->profil=='reponsable')
            {
                return view ('responsable.index', compact('reservations'));
            }
        }
        else
        {
            return view('visiteurs.index', compact('reservations'));
        }
    }
}
