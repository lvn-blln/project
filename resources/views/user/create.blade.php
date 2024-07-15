@extends('layouts.layout')

@section('content')

    <main class="mt-6">
        <div class="grid gap-6 lg:grid-cols-8 lg:justify-center text-center lg:gap-8">
        
        <form action="/user" method="POST">
            @csrf

                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" id="firstname" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastname" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <br/><br/>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                @enderror

                <br/><br/>

                <label for="type">Choose instrument:</label>
                <select name="instrument" id="type">
                    <option value="">--choose type--</option>
                    <option value="piano">Piano</option>
                    <option value="violin">Violin</option>
                    <option value="trumpet">Trumpet</option>
                    <option value="jazz_set">Jazz set</option>
                    <option value="accordion">Accordion</option>
                </select>
                
                <br/><br/>           

                <fieldset>
                <label>Interests: </label><br/>
                    Percussions <input type="checkbox" name="interest[]" value="percussions"><br />
                    Aerophones <input type="checkbox" name="interest[]" value="aerophones"> <br />
                    Strings <input type="checkbox" name="interest[]" value="strings"> <br />
                </fieldset>

               <br/><br/>
                <button type="submit" >Submit</button>
            </form>
            
        </div>
    </main>
@endsection

                  
