@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body justify-content-end">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>My Profile</h3>
                                <p>Name: {{ auth()->user()->firstname }}</p>
                            </div>
                        
                            <div class="col-md-6">
                                <a class="navbar-brand" href="#">
                                <img src="{{url('storage/'.auth()->user()->resume)}}" alt="profile" height="50">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

@endsection