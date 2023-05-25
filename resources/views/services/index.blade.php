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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  Services
                </div>
            </div>

            <div class="row">
                @foreach ($services as $service)   
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                              <div class="card-header">
                                <img class="card-img-top" style="height: 150px !important;" src="http://www.chambredesconseillers.ma/sites/default/files/styles/618x468/public/25.png" alt="">
                              </div>
                              <div class="card-body ">
                                <p class="text-xl text-capitalize pb-3 fs-4 mb-0 d-flex justify-content-center">
                                    @foreach($users as $user)
                                        @if($service->user_id == $user->id)
                                            {{$user->name}}
                                        @endif
                                    @endforeach
                                </p>
                                <span class="text-sm text-grey text-info pb-2">{{$service->name}}</span>
                                <br>
                                <p class="text-sm text-grey text-body-secondary">{{ $service->description }}</p>
                                <br>
                                <form action="{{url('salles/'. $service->id)}}">
                                  @csrf
                                  <button class="btn btn-primary" type="submit">Voir Salle</button>
                               </form>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>

            
        </div>
    </div>   
</div>
@endsection

@section('scripts')

@endsection