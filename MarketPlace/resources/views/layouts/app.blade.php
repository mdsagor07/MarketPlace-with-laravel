<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <!-- second navbar--->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-hover">
            <div class="container">
                <a class="navbar-brand" href="">
                
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover"
                 aria-controls="navbarDD" 
                aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHover">
                    <!-- Left Side Of Navbar -->
                    <ul class="container-fluid  navbar-nav">
                        
                    @for($i=1;$i<12;$i++)

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href=""
                         data-toggle="dropdown_remove_dropdown_class_for_clickable_link" aria-haspopup="true"
                         aria-expanded="false">
                         Category
                         </a>
                         <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item dropdown-toggle" href="">Subcategory(Computer)</a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="">childcategory(Dell laptop)
                                </a>
                            </li>
                        </ul>

                   
                    </ul>
                    @endfor
             </div>
        </nav>


        <main class="py-4">
        @yield('content')
        </main>
    </div>
    <style>
/* .navbar li a {
    color: white !important;
} */

.dropdown:hover>.dropdown-menu {
    display: block;
}

/* hover dropdown menus */
@media only screen and (max-width: 991px) {
.navbar-hover .show > .dropdown-toggle::after{
transform: rotate(-90deg);
}
}
@media only screen and (min-width: 492px) {

.navbar-hover .collapse ul li{position:relative;}
.navbar-hover .collapse ul li:hover> ul{display:block}
.navbar-hover .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
.navbar-hover .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}

</style>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>
</html>