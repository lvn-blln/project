@extends('layouts.layout')

@section('content')

    <main class="mt-6">
        <div class="grid gap-6 lg:grid-cols-12 lg:justify-center text-center lg:gap-8">
            <h1> All Users</h1>
            @foreach($user as $user)
            <div >
                <a href="user/{{ $user->id }}">{{++$loop->index }} {{". "}} {{ $user->firstname }} </a>
            </div>
            @endforeach

            @if (Session::has('success'))
                <p>{{Session::get('success')}}</p>
            @endif
            @if (Session::has('fail'))
                <p>{{Session::get('fail')}}</p>
            @endif
            
            
        </div>
    </main>


@endsection
