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
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="card " style="margin:20px;">
                <div class="card-header">Equipment</div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="card-text"> Nom D'equipment : {{ $equipment->name}}</h4>
                                <h5 class="card-text"> Disponibilite : 
                                    @if($equipment->disponibilite == 1)
                                        Oui
                                      @else
                                        Non
                                      @endif
                                </h5>
                                <h5 class="card-text">Origine : {{ $equipment->quantite }}</h5>
                                <h5 class="card-text">Dure de vie : {{ $equipment->dure_vie }}</h5>
                                <h5> Description : {{$equipment->description}}</h5>
                            </div>
                            <div class="col-8">
                                <img height="250px" src="../assets/files/{{$equipment->image}}" alt="">
                            </div>
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