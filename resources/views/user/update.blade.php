@extends('layouts.layout')

@section('content')

    <main class="mt-6">
        <style>
            .upper {
                text-transform: uppercase;
            }
        </style>

        
        <form action="{{ route('update', $user->id) }}" method="POST">
            @csrf
            <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" value="{{ $user->firstname }}" id="firstname" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" value="{{ $user->lastname }}" id="lastname" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <br/><br/>

                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}" id="email" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <label for="instrument">Instrument:</label>
                <input type="text" name="instrument" value="{{ $user->instrument }}" id="instrument" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <label for="interest">Interests:</label>
                <input type="text" name="interest" value="{{ $user->interest }}" id="interest" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <br/><br/>
            <button type="submit">Update Profile</button>

        </form>

            
        </div>
    </main>


@endsection
