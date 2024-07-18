@extends('layouts.guest')

@section('title')
    Login Page
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Login here</h3>
                        <form action="{{ route('loginAuth') }}" method="POST">
                            @csrf
                            <div class="col">
                                
                                @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert" aria-live="assertive" aria-atomic="true">
                                        <p>{{Session::get('error')}}</p>
                                    </div>
                                @endif

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-form-label">Email</label> <br>
                                    <div class="col-sm-12">
                                        <input type="text" name="email" class="form-control" id="staticEmail" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-form-label">Password</label> <br>
                                    <div class="col-sm-12">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary float-right">Login</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </dv>
        </div>
    </div>

@endsection