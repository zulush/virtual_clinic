@extends('layouts.app')

@section('content')

    <div>
        <div>
            {{-- <h2>For patient</h2> --}}
            @if (session('status'))
                {{ session('status') }}
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input id="username" name="email" type="email" placeholder="Email">
                </div>
                <div>
                    <label for="password">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="******************">
                </div>
                <div>
                    <button type="submit">
                        Sign In
                    </button>
                    {{-- <a href="{{ route('login.doctor') }}">I am a Doctor</a> --}}
                </div>
            </form>
        </div>
    </div>


@endsection
