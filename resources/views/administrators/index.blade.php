@extends('layouts.master')

@section('css')

@endsection

@section('title_header')
    Welcome Admin
@endsection

@section('content')

<div class="container">
    <div class="row">
    <div class="col">
        @if (session()->has('message'))
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                  <h2 class="card-title">Personneles</h2>
                </div>
            
                <div class="card-body p-0">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Profile</th>
                            <th>Acction</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                          <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                @if( $user->phone == null)
                                    {{ '-----' }}
                                @else
                                    {{ $user->phone }}
                                @endif
                            </td>
                            <td>
                                {{ $user->profil }}
                            </td>
                            <td>
                                <form action="{{url('/' )}}" method="get">
                                    @csrf
                                    <button class="btn btn-outline-primary" type="submit"> Voire</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection