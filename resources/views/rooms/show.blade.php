@extends('layouts.master')

@section('css')

@endsection

@section('title_page_1')
   <a href="">Home</a>
@endsection

@section('title_page_2')
    <a href="">Dashboard</a>
@endsection

@section('title_header')
    show salle
@endsection

@section('content')
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            {{session()->get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card " style="margin:20px;">
                <div class="card-header">{{ $room->name}}</div>
                    <div class="card-body">
                        <h5 class="card-text"> Numero : {{$room->number}}</h5>
                        <h5 class="card-text">Capacité : {{ $room->quantite }}</h5>
                        <h5 class="card-text">Equipments : {{ $room->equipment->name }}</h5>
                        <h5 class="card-text"> Etage : {{$room->etage}}</h5>
                        <h5 class="card-text"> Description : {{$room->descriptions}}</h5>
                    </div>
                    <div class="card-footer">
                       <div class="row">
                        <div class="col">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="btn btn-primary mr-1" href="{{ url('/salles/' . $room->id . '/edit/') }}">Modifier</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{url('/salles' . '/'. $room->id)}}" accept-charset="UTF-8">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Confirm delete?')">Supprimer</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                       </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection