@extends('layouts.layout')

@section('content')

    <main class="mt-6">
        <style>
            .upper {
                text-transform: uppercase;
            }
        </style>

        <div class="grid gap-6 lg:grid-cols-12 lg:justify-center text-center lg:gap-8">
        <h1>Profile Details for <span class="upper"><b>{{ $user->firstname }}</b></span></h1>
        <p><b>Firstname: </b> {{ $user->firstname }}</p>
        <p><b>Lastname: </b> {{ $user->lastname }}</p>
        <p><b>Email: </b> {{ $user->email }}</p>
        <p><b>Instrument: </b> {{ $user->instrument }}</p>
        <p><b>Interests:</b></p>
        <ul>
            @foreach($user->interest as $interest)
            <li>{{ $interest }}</li>
            @endforeach
        </ul>
        <button type="button"><a href="/user/update/{{ $user->id }}">Update</a></button>

        <form action="/user/{{ $user->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" style="background-color: #f58824">Delete User</button>

        </form>

        <!-- <form action="{{ route('userUpdate', $user->id) }}" method="POST">
            @csrf
            <label for="firstname">Firstname:</label>
                <input type="text" name="lastname" value="{{ $user->lastname }}" id="firstname" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <button type="submit">Update Profile</button>
        </form> 
        
        link update profile,, confirm delete-->


            
        </div>
    </main>


@endsection
