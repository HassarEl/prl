@extends('layouts.master')

@section('css')

@endsection

{{-- @section('title_page_1')
   <a href="#">Home</a>
@endsection

@section('title_page_2')
    <a href="#">Dashboard</a>
@endsection --}}

@section('title_header')
    Reservation
@endsection

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
              <h2 class="card-title">Equipment</h2>
            </div>
        
            <div class="card-body p-0">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Reservation</th>
                        <th>Heure Début</th>
                        <th>Durée</th>
                        <th>Phone</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Room</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $data)
                      <tr>
                        <th>
                            @foreach($users as $user)
                                @if($data->user_id == $user->id)
                                    {{$user->name}}
                                @endif
                            @endforeach
                        </th>
                        <td>
                            @foreach($users as $user)
                                @if($data->user_id == $user->id)
                                    {{$user->email}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$data->date_reservation}}</td>
                        <td>{{$data->heureDebut}}</td>
                        <td>{{$data->duree}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->title_reunion}}</td>
                        <td>{{$data->description}}</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Salles</option>
                                @foreach($rooms as $room)
                                    <option value="{{$room->id}}">{{$room->name}}</option>
                                @endforeach
                              </select>
                        </td>
                        <td>
                            <form action="" method="get" target="_blank">
                                @csrf
                                <button class="btn btn-success" type="submit">Accepte</button>
                             </form>
                             <form action="" method="get" target="_blank">
                                @csrf
                                <button class="btn btn-danger" type="submit">Refusé</button>
                             </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
