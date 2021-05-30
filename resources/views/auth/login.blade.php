@extends('layouts.front')

@section('content')

    <div>
        <div class="logindoctornew">
            {{-- <h2>For patient</h2> --}}
            @if (session('status'))
                {{ session('status') }}
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <input class="ununo" id="username" name="email" type="email" placeholder="Email">
                </div>
                <div>
                    <input class="ununo" id="password" name="password" type="password" placeholder="Password">
                </div>
                <div>
                    <button class="submit" type="submit">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
