@extends('layouts.app')

@section('content')

    <div>
        <div>
            <h3>For Doctors</h3>
            <form action="{{ route('login.doctor') }}" method="POST">
                @csrf
                <div >
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
                    <a href="{{ route('login') }}">I am a Patient</a>
                </div>
            </form>
        </div>
    </div>


@endsection
