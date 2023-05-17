@extends('layouts.master')

@section('css')

@endsection

@section('title_page_1')
   <a class="btn btn-info" href="">Home</a>
@endsection

@section('title_page_2')
    <a class="btn btn-info" href="{{route('createSalle')}}">Create Salle</a>
@endsection

@section('title_header')
    Salles
@endsection

@section('content')
    <div class="container">
      @if (session()->has('message'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
          {{session()->get('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
        </div>
      @endif
            <!-- Card salles -->
            <div class="page-section">
                <div class="container">
                  <h1 class="text-center mb-5 wow fadeInUp">Les Salles</h1>
                  <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                    <div class="row">

                        <!-- card 1-->
                     @foreach ($rooms as $room)   
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="card">
                              <div class="card-header">
                                <img style="height: 150px !important;" src="{{asset('assets/images/maroc_logo.png')}}" alt="">
                              </div>
                              <div class="card-body">
                                <p class="text-xl mb-0">{{$room->name}}</p>
                                <span class="text-sm text-grey">{{$room->quantite}}</span>
                                <br>
                                <br>
                                <a class="btn btn-primary" href="{{url('salles/'. $room->id)}}">View Content</a>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                    <!-- End Row -->
            
                    
                  
                </div>
              </div>
            </div>

    </div>    




@endsection

@section('scripts')

@endsection