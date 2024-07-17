@extends('layouts.layout')

@section('content')

    <main class="mt-6 flex lg:justify-center text-center ">
        <style>
            .upper {
                text-transform: uppercase;
            }
        </style>

            @if (Session::has('fail'))
                <p>{{Session::get('fail')}}</p> <br/>
            @endif
            
        <form action="/user/login" method="POST">
            @csrf
            <label for="email">Email:</label>
                <input type="email" name="email"  id="email" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror
<br/> <br/>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <br/><br/>

            <button type="submit">Login</button>

        </form>

            
        </div>
    </main>


@endsection
