<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hall Boking System</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style type="text/css">
        body{
            background-color: #424242 !important;
        }
        .navbar-nav > li > .dropdown-menu { 
            background-color: #212121; 
        }
        .navbar-nav > li > .dropdown-menu a{
            color: #fff;
        }
        .navbar-nav > li > .dropdown-menu a:hover{
            color: #212121;
        }
    </style>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Hall Booking System
                    </a>
                    <div class="nav navbar-nav">
                    
                    <ul class="nav navbar-nav navbar-left">

                        <li class="{{ Request::is('home') ? 'active' : '' }} {{ Request::is('/') ? 'active' : '' }}" >
                            <a href="/home">
                                Home
                            </a>
                        </li>
                        <li class="{{ Request::is('book') ? 'active' : '' }}">
                            <a href="/book">
                                Book the Hall
                            </a>
                        </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                            <a href="/about">
                                About Us
                            </a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}">
                            <a href="/contact">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
                

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right navbar-inverse">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/admin">
                                            Admin Panel
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
<footer class="footer">
      <div class="container">
        <p class="text-muted text-center">All Rights Reserved.</p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
