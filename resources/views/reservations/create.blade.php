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
    Create Reservation
@endsection

@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Reservation Form</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('reservation.adminstore') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="name" id="exampleInputUsername2" placeholder="Name User" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="email" id="exampleInputUsername2" placeholder="Email Equipment" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone" id="exampleInputUsername2" placeholder="Email Equipment" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="title_reunion" class="col-sm-3 col-form-label">Title Réunuent</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="title_reunion" id="exampleInputUsername2" placeholder="Email Equipment" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                            <label for="date_reservation" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="date_reservation" id="exampleInputUsername2" required>
                            </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="heureDebut" class="col-sm-3 col-form-label">Heure</label>
                        <div class="col-sm-9">
                          <input type="time" class="form-control" min="8:00" max="20:00"  name="heureDebut" id="exampleInputUsername2" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="duree" class="col-sm-3 col-form-label">Durée</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="duree" id="exampleInputUsername2" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="file" class="col-sm-3 col-form-label">Piéce joint</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="file" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control" name="description" id="exampleInputUsername2" required></textarea>
                        </div>
                      </div>

                      {{-- <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-4">
                          <select class="form-select" name="profil" id="profil">
                            <option selected>Role User</option>
                            <option value="admin">admin</option>
                            <option value="chefService">chefService</option>
                            <option value="reponsable">reponsable</option>
                            <option value="user">user</option>
                          </select>
                        </div>
                      </div> --}}

                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-4">
                                <input type="submit" class="btn btn-info" value="Ajouter">
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