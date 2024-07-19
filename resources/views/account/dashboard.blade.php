@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>My Profile</h3>
                        
                        <p>Name: {{ auth()->user()->firstname }}</p>
                    </div>
                </div> 
            </dv>
        </div>
    </div>

@endsection