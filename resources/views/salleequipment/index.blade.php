@extends('layouts.master')

@section('css')

@endsection

@section('title_header')
    Ajouter Equipment au salles
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
        <div class="col-md-3">
            <button class="btn btn-primary" onclick="window.location.href='/equipment/create';">
                Ajouter Equipment
            </button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card m-0">
            <div class="card-header">
              Contenu Salle
            </div>
            <div class="card-body">
              
                <form class="form" action="{{route('contenu.content')}}" method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="inputEmail4" class="form-label">Liste Salles</label>
                      <select class="form-select" name="room">
                        <option selected>Select Salle</option>
                        @foreach($salles as $salle)
                        <option value="{{$salle->id}}">{{$salle->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info">Voire</button>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection