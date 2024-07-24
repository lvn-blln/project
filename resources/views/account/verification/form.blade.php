@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        User Verification
                    </div>
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
                        @if(Session::has('error'))
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-success">
                                        {{ Session::get('error') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <form action="{{ route('verify-user-post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" placeholder="Enter OTP here..." name="otp" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success btn-sm float-right">Verify</button>
                                </div>
                            </form>

                            <form action="{{ route('resend-email-code') }}" method="POST">
                                @csrf
                                <button class="btn btn-dark mt-3 btn-sm">Resend code</button>
                            </form> 

                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

@endsection