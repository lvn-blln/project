@extends('layouts.layout')

@section('content')

    <main class="mt-6">
        <div class="grid gap-6 lg:grid-cols-12 lg:justify-center text-center lg:gap-8">
            @if (Session::has('success'))
                <p>{{Session::get('success')}}</p>
            @endif
            @if (Session::has('fail'))
                <p>{{Session::get('fail')}}</p>
            @endif
        <!-- <p class="mssg">{{ session('mssg') }}</p>
        <p class="mssg">{{ session('success') }}</p> -->
        <button type="button"><a href="/user/create">Register</a></button>
        <button type="button" style="background-color: #212120"><a href="/user/login">Login</a></button>
        <button type="button" style="background-color: #f58824"><a href="/user">Show Users</a></button>
            
        </div>
    </main>


@endsection
