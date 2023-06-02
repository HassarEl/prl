<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationControlle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user()->all();
        $rooms = Room::all();
        
        
        if(auth()->user()->id == Reservation::find(auth()->user()->id)->id && auth()->user()->profil == 'chefService'){
            $reservations = Reservation::where('user_id', Auth::user()->id)->get();
        } elseif(auth()->user()->profil == 'admin' ) {
            $reservations = Reservation::all();
        }
        
        return view('reservations.index', compact('reservations', 'users', 'rooms'))->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth::user()->all();
        $rooms = Room::all();
        $reservations = Reservation::all();

        return view('reservations.create', compact('reservations', 'users', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->email);

        if($request->file('file') != null){
            
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('assets/files/piecejoin/'), $fileName);

            $reservation->piece_jointe = $fileName;


        } else {

            $reservation->piece_jointe = null;
        }
    
        $reservation = new Reservation();
        $reservation->user_id = auth()->user()->id;
        $reservation->phone = $request->phone;
        $reservation->title_reunion = $request->title_reunion;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->heureDebut = $request->heureDebut;
        $reservation->duree = $request->duree;
        $reservation->description = $request->description;
        

        $reservation->save();

        return redirect()->route('home')->with('message', 'Reservation Has Been Added Success');

    }


    public function adminstore(Request $request)
    {

        

        if($request->file('file') != null){
            
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('assets/files/piecejoin/'), $fileName);

            $reservation->piece_jointe = $fileName;

        } 
    
        $reservation = new Reservation();
        $reservation->user_id = auth()->user()->id;
        $reservation->phone = $request->phone;
        $reservation->title_reunion = $request->title_reunion;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->heureDebut = $request->heureDebut;
        $reservation->duree = $request->duree;
        $reservation->description = $request->description;
        

        $reservation->save();

        return redirect()->route('reservation.index')->with('message', 'Reservation Has Been Added Success');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = Auth::user()->all();
        $rooms = Room::all();
        $reservations = Reservation::find($id);
        return view('reservations.show' ,compact('reservations', 'users', 'rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $rooms = Room::all();

        $reservation = Reservation::find($id);

        $reservation->room_id = $request->salle;
        
        $user = Auth::user()->find($reservation->user_id);

        // dd($user->email);

        if($request->status == 'accepte')
        {
            Mail::to(
                $user->email
            )->send(new ConfirmationMail($user), compact('reservation', 'rooms')); 
        }
        
        $reservation->status = $request->status;

        $reservation->save();
        return redirect()->route('reservation.index')->with('message', 'Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function status() 
    {
        return view('reservations.index');
    }

    // public function search(Request $request){
    //     if($request->ajax()){
    //         $datas = Reservation::where('id', 'like', '%'.$request->search.'%')
    //         ->orwhere('date_reservation', 'like', '%'.$request->search.'%')
    //         ->get();

    //         $output = '';

    //         if(count($data) > 0){


    //             $output = '
    //             <table class="table table-striped table-hover">
    //             <thead>
    //               <tr>
    //                 <th>Name</th>
    //                 <th>Email</th>
    //                 <th>Date Reservation</th>
    //                 <th>Heure Début</th>
    //                 <th>Durée</th>
    //                 <th>Titre</th>
    //                 <th>Acction</th>
    //               </tr>
    //             </thead>
    //             <tbody>';

    //                 foreach($datas as $data){
    //                     $output .='
    //                     <tr>
    //                 <th>
    //                     foreach($users as $user){
    //                         if($data->user_id == $user->id)
    //                             {$user->name}
    //                     }

    //                 </th>
    //                 <td>
    //                     foreach($users as $user){
    //                         if($data->user_id == $user->id)
    //                             {$user->email}
    //                     }

    //                 </td>
    //                 <td>$data->date_reservation</td>
    //                 <td>$data->heureDebut</td>
    //                 <td>
    //                     foreach($rooms as $room){
    //                         if($data->room_id == null)
    //                             { "Not Define" }
    //                             break($data->room_id == null)

    //                         elseif($data->room_id == $room->id)
    //                             { $room->name }
    //                     }
    //                 </td>
    //                 <td>
    //                     if($data->status == "refuse")
    //                     {
    //                        <h5 class="card-text"><span class="badge text-bg-danger">{{$data->status}}</span></h5> 
    //                     }
    //                     elseif ($data->status == "accepte")
    //                     {
    //                         <h5 class="card-text"><span class="badge text-bg-success">{{$data->status}}</span></h5> 
    //                     }
    //                     else {
    //                         <h5 class="card-text"><span class="badge text-bg-warning">{{$data->status}}</span></h5> 
    //                     }
    //                 </td>
    //                 <td>
    //                     <form action="{{url("/reservation/" . $data->id)}}" method="get">
    //                         @csrf
    //                         <button class="btn btn-outline-primary" type="submit"> Voire</button>
    //                     </form>
    //                 </td>
    //               </tr>';
    //                 }
                  
                  
    //            $output .= '
    //            </tbody>
    //         </table>
    //             ';


    //         } else{
    //             $output .= 'No results found';
    //         }
    //     }
    //     return $output;
    // }
}
