@extends('layouts.master')

@section('css')

@endsection


@section('title_header')
    Create User
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h5>Create User</h5>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Name User" required>
                                </div>
                              </div>
    
                              <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="email" class="form-control" name="email" id="exampleInputUsername2" placeholder="Email Equipment" required>
                                </div>
                              </div>
    
                              <div class="form-group row">
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
                              </div>
    
                              <!-- Password -->
                                <div class="form-group row">
                                    <x-input-label class="col-sm-3 col-form-label" for="password" :value="__('Password')" />
                                
                                    <div class="col-sm-9">
                                        <x-text-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                            
                                <!-- Confirm Password -->
                                <div class="form-group row">
                                    <x-input-label class="col-sm-3 col-form-label" for="password_confirmation" :value="__('Confirm Password')" />
                                    <div class="col-sm-9">
                                        <x-text-input id="password_confirmation" class="form-control"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                    
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

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