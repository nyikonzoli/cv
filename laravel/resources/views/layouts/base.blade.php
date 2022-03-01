<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
    @yield('head')
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <script src="{{asset('js/base/responsiveMenu.js')}}"></script>
</head>
<body>
    <div id="main">
        <div id="left">
            <div id="nav">
                <h2 id="name-title"><b>Zoltán Nyikon</b></h2>
                <button id="menu-icon" onclick="dropMenu();"><h1>≡</h1></button>
            </div>

            <div id="menu">
                <div style="background-image: url('https://placekitten.com/450/450');"> </div>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : ''}}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : ''}}">About Me</a>
                    </li>
                    <li>
                        <a href="{{ route('resume') }}" class="{{ request()->is('resume') ? 'active' : ''}}">Resume</a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="{{ request()->is('projects') ? 'active' : ''}}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : ''}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="spacer">
            <img src="{{asset('img/spacer.svg')}}">
        </div>
        <div id="right">
            @yield('content')
        </div>
    </div>

</body>
</html>