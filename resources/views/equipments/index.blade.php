@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@endsection

@section('title_page_1')
   <a href="">Home</a>
@endsection

@section('title_page_2')
<a class="btn btn-info" href="{{route('equipment.create')}}">Create</a>
@endsection

@section('title_header')
    Equipments
@endsection

@section('content')
<div class="content">
  
  @if (session()->has('message'))
  <div class="alert alert-success  alert-dismissible fade show" role="alert">
      {{session()->get('message')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row">
    <div class="col-md-2 pl-3 pb-2">
        <a class="btn btn-primary" href="{{route('equipment.create')}}" title="Add New Doctor">Ajouter un Equipment</a>
    </div>
</div>
</div>

  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Equipment</h2>
    </div>

    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th>
                      Nom
                  </th>
                  <th>
                    Disponibilite
                  </th>
                  <th>
                    Quantite
                  </th>
                  <th>
                    Dure de vie
                  </th>
                  <th>
                      Acction
                  </th>
              </tr>
          </thead>
          <tbody>

              @foreach ($equipments as $equipment)
              <tr>
                  <td>
                      {{$equipment->name}}
                  </td>
                  <td>  
                    @if($equipment->disponibilite == 1)
                      Oui
                    @else
                      Non
                    @endif
                  </td>
                  <td>
                      {{$equipment->quantite}}
                  </td>
                  <td>
                      {{$equipment->dure_vie}}
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-4">
                        <a  class="btn btn-info" href="{{ url('/equipment/' . $equipment->id) }}">
                          voir
                        </a>
                      </div>
                      <div class="col-4">
                        <a class="btn btn-success" href="{{ url('/equipment/' . $equipment->id . '/edit/') }}">
                          Modifier
                        </a>
                      </div>
                      <div class="col-4">
                        <form method="POST" action="{{ url('/equipment' . '/' . $equipment->id) }}" accept-charset="UTF-8">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger" title="Delete Doctor" onclick="return confirm('Confirm delete?')">Delete</button>
                      </form>
                      </div>
                    </div>
                  </td>
              </tr>    
              @endforeach
              
          </tbody>
      </table>
    </div>

  </div>

@endsection

@section('scripts')

  <script>
    const alertList = document.querySelectorAll('.alert')
    const alerts = [...alertList].map(element => new bootstrap.Alert(element))
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection