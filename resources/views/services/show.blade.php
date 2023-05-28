@extends('layouts.master')

@section('css')

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
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card " style="margin:20px;">
                <div class="card-header">
                    <h5 class="card-text">Chef de Service</h5>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-text"> Name : 
                                    @foreach($users as $user)
                                        @if($service->user_id == $user->id)
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                </h5>
                                <h5 class="card-text">Service : {{ $service->name }}</h5>
                                <h5 class="card-text"> Description : {{ $service->description }}</h5>
                            </div>
                            <div class="col-md-4">
                                <img class="card-img-top" src="http://www.chambredesconseillers.ma/sites/default/files/styles/618x468/public/25.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                       <div class="row">
                        <div class="col">
                            <ul class="nav">
                                <li class="nav-item">
                                    <form method="POST" action="{{url('/services' . '/'. $service->id)}}" accept-charset="UTF-8">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Confirm delete?')">Supprimer</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                       </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection