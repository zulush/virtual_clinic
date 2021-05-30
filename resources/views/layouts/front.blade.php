<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ URL::asset('css/frontend/styles.css') }}">
        <title>Clinique</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        @include('frontend.includes.header')
        @yield('content')
        @include('frontend.includes.footer')
    
    <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
        <script src="{{ URL::asset('js/frontend/main.js') }}"></script>
    </body>
</html>