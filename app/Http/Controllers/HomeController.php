<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        // return view('admin.index');

        if(Auth::id())
        {
            if(Auth::user()->profil=='admin')
            {   
                return view('admin.index');
            }
            else if(Auth::user()->profil=='chefService')
            {  
                return view('chefService.index');
            }
            else if(Auth::user()->profil=='user') 
            {
                return view('visiteurs.index');
            }
            else if(Auth::user()->profil=='reponsable')
            {
                return view ('responsable.index');
            }
        }
        else
        {
            return view('visiteurs.index');
        }
    }
}
