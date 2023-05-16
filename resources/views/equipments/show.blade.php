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
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card " style="margin:20px;">
                <div class="card-header">Equipment</div>
                <div class="card-body">
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection