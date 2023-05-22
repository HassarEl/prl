@extends('layouts.master')

@section('css')

@endsection

@section('title_page_1')
   <a href="">Home</a>
@endsection

@section('title_page_2')
    <a href="{{route('salles')}}">Salles</a>
@endsection

@section('title_header')
    Create Salle
@endsection

@section('content')
    

    <!-- partial -->
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

                <form class="forms-sample" action="{{route('store.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input required type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Nom de salle">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="number" class="col-sm-3 col-form-label">Numero</label>
                    <div class="col-sm-9">
                      <input required type="number" class="form-control" name="number" id="exampleInputUsername2" placeholder="Numero de salle">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="quantite" class="col-sm-3 col-form-label">Capacité</label>
                    <div class="col-sm-9">
                      <input type="number" name="capacite" class="form-control" id="exampleInputEmail2" placeholder="Capacite de salle">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="etage" class="col-sm-3 col-form-label">Etage</label>
                    <div class="col-sm-9">
                      <input type="number" name="etage" class="form-control" id="exampleInputEmail2" placeholder="Etage">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="equipment_id" class="col-sm-3 col-form-label">Equipment</label>
                    <div class="col-sm-9">
                        <select style="color: #6C708C;" name="equipment_id" class="form-control" id="exampleSelectGender">
                            <option selected>--Select--</option>
                            @foreach($equipments as $equipment)
                              <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descriptions" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input required type="text" class="form-control" name="descriptions" id="exampleInputUsername2" placeholder="Descriptions">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Salle Image</label>
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