@extends('layouts.master')

@section('css')
<style>
    .badge{
        padding: 3px 8px 5px 8px !important;
        font-size: 1em !important;
    }
</style>
@endsection

{{-- @section('title_page_1')
   <a href="#">Home</a>
@endsection

@section('title_page_2')
    <a href="#">Dashboard</a>
@endsection --}}

@section('title_header')
    Reservation
@endsection

@section('content')
<div class="container">
    <div class="row">
        @if (session()->has('message'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            {{session()->get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
    @endif
    </div>
</div>
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h2 class="card-title">Reservation</h2> 
              {{-- <input type="text" class="form-item" id="search" onfocus="search"> --}}
            </div>
        
            <div class="card-body p-0" id="search_list">
                <table class="table table-striped table-hover" id="example1">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Reservation</th>
                        <th>Heure Début</th>
                        <th>Salle</th>
                        <th>Status</th>
                        @can('isAdmin')
                        <th>Acction</th>
                        @endcan
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $data)
                      <tr>
                        <th>
                            @foreach($users as $user)
                                @if($data->user_id == $user->id)
                                    {{$user->name}}
                                @endif
                            @endforeach
                        </th>
                        <td>
                            @foreach($users as $user)
                                @if($data->user_id == $user->id)
                                    {{$user->email}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$data->date_reservation}}</td>
                        <td>{{$data->heureDebut}}</td>
                        <td>
                            @foreach($rooms as $room)
                                @if($data->room_id == null)
                                    {{ "Not Define" }}
                                    @break($data->room_id == null)
                                @elseif($data->room_id == $room->id)
                                    {{ $room->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @if($data->status == 'refuse')
                                <h5 class="card-text"><span class="badge text-bg-danger">{{$data->status}}</span></h5>
                            @elseif ($data->status == 'accepte')
                                <h5 class="card-text"><span class="badge text-bg-success">{{$data->status}}</span></h5>
                            @else
                                <h5 class="card-text"><span class="badge text-bg-warning">{{$data->status}}</span></h5>
                            @endif
                        </td>
                        @can('isAdmin')
                        <td>
                            <form action="{{url('/reservation/' . $data->id)}}" method="get">
                                @csrf
                                <button class="btn btn-outline-primary" type="submit"> Voire</button>
                            </form>
                        </td>
                        @endcan
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script>
        $(document).ready(function(){
            $('#search').on('keyup', function(){
                var query = $(this).val();
                $.ajax({
                    url:"search",
                    type:"GET",
                    data:{'search' : query},
                    success: function(data){
                        $('#search_list').html(data);
                    }
                })
            })
        });
    </script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
    </script> --}}

@endsection
