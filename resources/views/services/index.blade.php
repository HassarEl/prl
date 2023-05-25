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
    Services
@endsection

@section('content')
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            {{session()->get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
    @endif
    <br>
    <div class="row">
        <div class="card">
            <div class="card-header">
              Services
            </div>
            <div class="card-body">
              
                <table class="table table-hover ">
                    <thead>
                      <tr>
                        <th>Non</th>
                        <th>User</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{$service->name}}</td>

                                
                                <td>
                                    @foreach($users as $user)
                                        @if($service->user_id == $user->id)
                                            {{$user->name}}
                                        @endif
                                    @endforeach
                                </td>
                                

                                <td>{{$service->description}}</td>
                                <td></td>
                            </tr>
                         @endforeach
                    </tbody>
                  </table>
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection