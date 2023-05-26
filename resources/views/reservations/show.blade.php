@extends('layouts.master')

@section('css')
    <style>
        .badge{
            padding: 3px 8px 5px 8px !important;
            font-size: 1em !important;
        }
    </style>
@endsection

@section('title_header')
    Reservation
@endsection

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="card" style="margin:20px;">
                <div class="card-header">Equipment</div>
                <div class="card-body pt-1 pb-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h5 class="card-text"> User : 
                                    @foreach($users as $user)
                                        @if($reservations->user_id == $user->id)
                                            {{$user->name}}
                                        @endif
                                    @endforeach
                                </h5>
                                <h5 class="card-text"> Email : 
                                    @foreach($users as $user)
                                        @if($reservations->user_id == $user->id)
                                            {{$user->email}}
                                        @endif
                                    @endforeach
                                </h5>
                                <h5 class="card-text"> Phone : {{$reservations->phone}}</h5>
                                <h5 class="card-text"> Titre Reunion : {{$reservations->title_reunion}}</h5>
                                
                                <h5 class="card-text"> Date Reservation : {{$reservations->date_reservation}}</h5>
                                <h5 class="card-text">  Heure Debut : {{$reservations->heureDebut}}</h5>
                                <h5 class="card-text"> Durée : {{$reservations->duree}}</h5>
                                @if($reservations->status == 'refuse')
                                    <h5 class="card-text"> status : <span class="badge text-bg-danger">{{$reservations->status}}</span></h5>
                                @elseif ($reservations->status == 'accepte')
                                    <h5 class="card-text"> status : <span class="badge text-bg-success">{{$reservations->status}}</span></h5>
                                @else
                                <h5 class="card-text"> status : <span class="badge text-bg-warning">{{$reservations->status}}</span></h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <form class="form" action="{{ url('/reservation/'. $reservations->id .'/reservate') }}" method="post">
                        @csrf
                        <div class="row">

                        
                            <div class="col-md-4">
                                <select class="form-select" name="salle" required>
                                    <option selected>Selection La Salle</option>
                                    <option value="">Null Value</option>
                                    @foreach($rooms as $room)
                                        <option value="{{$room->id}}">{{$room->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" name="status">
                                    <option selected>Votre Confirmation</option>
                                    <option value="accepte">Accepte</option>
                                    <option value="en_cour">En Cours</option>
                                    <option value="refuse">Refuser</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Reservé</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection