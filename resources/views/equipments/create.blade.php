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
    <h4>Create New Equipment</h4>
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

            <form class="forms-sample" action="{{route('equipment.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input required type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Name Equipment" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="disponibilite" class="col-sm-3 col-form-label">Disponibilite</label>
                <div class="col-sm-9">
                  <label for="oui">Oui</label>
                  <input type="radio" name="disponibilite" id="oui" value="1">
                  <label for="non">Non</label>
                  <input type="radio" name="disponibilite" id="non" value="0">
                </div>
              </div>
              {{-- <div class="form-group row">
                <label for="quantite" class="col-sm-3 col-form-label">Quantite</label>
                <div class="col-sm-9">
                  <input type="number" min="0" name="quantite" class="form-control" id="exampleInputEmail2" placeholder="Quantite" required>
                </div>
              </div> --}}
              
              <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                  <input type="text"  name="description" class="form-control" id="exampleInputEmail2" placeholder="Description" required>
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