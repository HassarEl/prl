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
            <!-- Card salles -->
            <div class="page-section">
                <div class="container">
                  <h1 class="text-center mb-5 wow fadeInUp">Les Salles</h1>
                  <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                    <div class="row">

                        <!-- card 1-->
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="card">
                              <div class="card-header">
                                <img style="height: 150px !important;" src="{{asset('assets/images/maroc_logo.png')}}" alt="">
                              </div>
                              <div class="card-body">
                                <p class="text-xl mb-0">Num Salle</p>
                                <span class="text-sm text-grey">Capacity</span>
                                <div class="meta">
                                    <a href="#"><span class="mai-call">View Content</span></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 2-->
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="card">
                              <div class="card-header">
                                <img style="height: 150px !important;" src="{{asset('assets/images/maroc_logo.png')}}" alt="">
                              </div>
                              <div class="card-body">
                                <p class="text-xl mb-0">Num Salle</p>
                                <span class="text-sm text-grey">Capacity</span>
                                <div class="meta">
                                    <a href="#"><span class="mai-call">View Content</span></a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 3-->
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="card">
                              <div class="card-header">
                                <img style="height: 150px !important;" src="{{asset('assets/images/maroc_logo.png')}}" alt="">
                              </div>
                              <div class="card-body">
                                <p class="text-xl mb-0">Num Salle</p>
                                <span class="text-sm text-grey">Capacity</span>
                                <div class="meta">
                                    <a href="#"><span class="mai-call">View Content</span></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>




                    </div>
                    <!-- End Row -->
            
                    
                  
                </div>
              </div>
            </div>

    </div>    




@endsection

@section('scripts')

@endsection