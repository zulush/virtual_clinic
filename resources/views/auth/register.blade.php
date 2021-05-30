@extends('layouts.front')

@section('content')

    
    <div class="logindoctornew">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <input class="ununo" id="first_name" name="first_name" type="text" placeholder="First name">
            </div>
            <div>
                <input class="ununo" id="last_name" name="last_name" type="text" placeholder="last_name">
            </div>
            <div>
                <input class="ununo" id="email" name="email" type="email" placeholder="Email">
                    @error('email')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <input class="ununo" id="email" name="city" type="text" placeholder="city">
                    @error('city')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <input class="ununo" id="phonenumber" name="phonenumber" type="text" placeholder="phonenumber">
                    @error('phonenumber')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <input class="ununo" id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <input class="ununo" name="password_confirmation" id="password_confirmation" type="password" placeholder="Repeat your password">
            </div>
            <div>
                <button class="submit" type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>


@endsection
