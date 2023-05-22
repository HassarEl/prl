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
    Edite
@endsection

@section('content')
<div class="container page-body-wrapper">
    <div class="col-md-10 grid-margin stretch-card pt-5">
        <div class="card pt-5">
          <div class="card-body">
            @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <h2 class="card-title">Ajouter Salle</h2>

            <form class="forms-sample" action="{{ url('/equipment/' . $equipment->id . '/edit') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input required type="text" class="form-control" name="name" value="{{$equipment->name}}" placeholder="Name Equipment" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="disponibilite" class="col-sm-3 col-form-label">Disponibilite</label>
                <div class="col-sm-9">
                  <input type="number" min="0" max="1" name="disponibilite" class="form-control" value="{{$equipment->disponibilite}}" placeholder="Oui ou Non" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="quantite" class="col-sm-3 col-form-label">Quantite</label>
                <div class="col-sm-9">
                  <input type="number" min="0" name="quantite" class="form-control" value="{{$equipment->quantite}}" placeholder="Quantite" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                  <input type="text"  name="description" class="form-control" value="{{$equipment->description}}" placeholder="Description" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Equipment Image</label>
                <div class="col-sm-9">
                  <input type="file" name="file" style="background: transparent;">
                </div>
              </div>
              
                <div class="form-group row" style="text-align: center"> 
                    <div class="col-md-2"></div> 
                    <br>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
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