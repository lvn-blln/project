@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <h3>My Profile</h3>
                                <p>Name: {{ auth()->user()->firstname ." ". auth()->user()->lastname }}</p>
                            </div>
                        
                            <div class="col-md-6 text-end">
                                <a class="navbar-brand" href="#">
                                <img src="{{url('storage/'.auth()->user()->resume)}}" alt="profile" height="70">
                                </a>
                            </div>
                        </div>

                        @if(auth()->user()->is_verified == 0)
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <a href="{{ route('verify-user-form') }}">Please click here to verify your email.</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div> 
            </div>
        </div>
    </div>

@endsection