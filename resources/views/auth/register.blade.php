@extends('layouts.guest')

@section('title')
    Register Page
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Please register here</h3>
                        <form action="{{ route('registerPost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col">

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert" >
                                        <p>{{Session::get('success')}}</p>
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert" aria-live="assertive" aria-atomic="true">
                                        <p>{{Session::get('error')}}</p>
                                    </div>
                                @endif

                                <div class="mb-3 row">
                                    <label for="firstname" class="col-form-label">Firstname</label> <br>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="your firstname" required>
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="lastname" class="col-form-label">Lastname</label> <br>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="your lastname" required>
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-form-label">Email</label> <br>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="staticEmail" name="email" placeholder="email@example.com" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-form-label">Password</label> <br>
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" name="password" id="inputPassword" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror</div>

                                </div>

                                <div class="mb-3 row">
                                    <label for="confirm_password" class="col-form-label">Confirm Password</label> <br>
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                                        @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror</div>

                                </div>

                                <div class="mb-3 row">
                                <label for="instrument" class="col-form-label">Instrument</label> <br>
                                    <div class="col-sm-12">
                                        <select class="form-select" name="instrument" aria-label="Default select example">
                                            <option value="">-- choose instrument --</option>
                                            <option value="piano">Piano</option>
                                            <option value="violin">Violin</option>
                                            <option value="trumpet">Trumpet</option>
                                            <option value="jazz_set">Jazz set</option>
                                            <option value="accordion">Accordion</option>
                                        </select>
                                        @error('instrument')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="instrument" class="col-form-label">Interests</label> <br>
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="interest[]" type="checkbox" value="percussions" id="" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Percussions
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input class="form-check-input" name="interest[]" type="checkbox" value="aerophones" id="" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Aerophones
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" name="interest[]" type="checkbox" value="strings" id="" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Strings
                                            </label>
                                        </div>
                                        
                                        @error('interest')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Resume</label>
                                    <input class="form-control form-control-sm" name="resume" id="formFileSm" type="file" required>
                                </div>

                                <button class="btn btn-primary float-right">Register</button>
                                
                            </div>
                        </form>
                    </div>
                </div> 
            </dv>
        </div>
    </div>

@endsection