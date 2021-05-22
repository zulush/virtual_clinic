@extends('layouts.app')

@section('content')

    <div>
        <div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="first_name">
                        First name
                    </label>
                    <input id="first_name" name="first_name" type="text" placeholder="First name">
                </div>
                <div>
                    <label for="last_name">
                        Last name
                    </label>
                    <input id="last_name" name="last_name" type="text" placeholder="last_name">
                </div>
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Email">
                        @error('email')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="city">
                        City
                    </label>
                    <input id="email" name="city" type="text" placeholder="city">
                        @error('city')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="Phonenumber">
                        Phonenumber
                    </label>
                    <input id="phonenumber" name="phonenumber" type="text" placeholder="phonenumber">
                        @error('phonenumber')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="password">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="******************">
                        @error('password')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Password again</label>
                    <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Repeat your password">
                </div>
                <div>
                    <button type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
