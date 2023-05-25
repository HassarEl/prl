@extends('layouts.master')

@section('css')

@endsection


@section('title_header')
    Modifier Service
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
            <h2 class="card-title">Modifier Service</h2>

            <form class="forms-sample" action="{{ url('/services/'. $service->id .'/edit') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input required type="text" class="form-control" value="{{ $service->name }}" name="name" id="exampleInputUsername2" placeholder="Nom Services" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                    <label for="name" class="col-form-label">Affecter L'utilisateur</label>
                </div>
                <div class="col-md-9">
                    <select name="user_id" class="form-select" aria-label="Default select example" id="user_id">
                        <option selected>Select User</option>
    
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                  <input type="text"  name="description" class="form-control" value="{{ $service->description }}" id="exampleInputEmail2" placeholder="Description" required>
                </div>
              </div>
                <div class="form-group row" style="text-align: center"> 
                    <div class="col-md-2"></div> 
                    <br>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Ajouter</button>
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