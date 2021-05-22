<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Virtual Clinic</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="" >Posts</a>
            </li>
        </ul>

        <ul>
            @auth
            <li>
                <a href="">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth
            @guest
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
            @endguest
        </ul>
    </nav>
    
    @yield('content')
    
</body>

</html>