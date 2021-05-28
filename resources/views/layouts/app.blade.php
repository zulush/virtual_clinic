<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Virtual Clinic</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="{{ route('doctors_list') }}" >find doctor</a>
            </li>
        </ul>

        <ul>
            @auth
            <li>
                <a href="">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</a>
            </li>
            <li>
                <a href="{{ route('unreaded_notifications') }}">Notifications</a>
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