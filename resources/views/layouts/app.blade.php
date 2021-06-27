<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome icons (free version)-->
    <!-- Google fonts-->

    <title>{{ config('app.name', 'Roya') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('assets\img\royaTvLogo.png')}}"/>



</head>
<body style="background-image: url('https://cdn.wallpapersafari.com/54/67/yXjDHE.jpg'); background-repeat:no-repeat; background-size: cover; ">

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm " style="background-clip: content-box;border-radius: 40px; ">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}" style="font-size: 26px; color: #efd134;">
                <strong>Roya Watch</strong>
            </a>
        {{--                {{dd(\Illuminate\Support\Facades\Auth::user()->admin)}}--}}


        @auth()
            @if ($user[0]->RoleCOT() === true)
                <!-- category -->
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            category
                        </a>



                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('category.index')}}">categories</a>
                            <a class="dropdown-item" href="{{route('categories_type.index')}}">categories type</a>
                        </div>

                    </div>

                    &nbsp;
                    <!-- posts -->
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            posts
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('posts.index')}}">posts</a>
                            <hr>
                            <a class="dropdown-item" href="{{route('posts.Trashed')}}">delted posts</a>
                        </div>
                    </div>

                    &nbsp;
                    <!-- tags -->
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            tags
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('tags.index')}}">tags</a>
                        </div>
                    </div>

                &nbsp;

                    <!-- movies -->
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            movies
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('movies.index')}}">movies</a>
                            <a class="dropdown-item" href="{{route('actor.index')}}">Actors</a>
                        </div>
                    </div>

                    &nbsp;
                    <div class="dropdown show">
                        <a class="btn btn-lg" style="background-color:cadetblue" href="{{route('index')}}" role="button"
                           id="dropdownMenuLink">
                            <strong>Check website</strong>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>


                    </div>


                @endif
            @endauth


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" style="font-size: 23px;">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link font-weight-bolder" href="{{ route('login') }}" style="    color: rgb(239, 209, 52);">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link font-weight-bolder" style="    color: rgb(239, 209, 52);"
                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bolder " href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" style="box-shadow: 2px 0px 19px 5px #8888ac; border-radius: 58px;    background: #8888AC;" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{route('profile.show',['id'=>Auth::user()->id])}}">
                                    My Profile
                                </a>

                            @auth()
                                @if ($user[0]->RoleUsers() === true)
                                    <!-- users -->
                                        <a class="dropdown-item" href="{{route('user.index')}}">
                                            users
                                        </a>&nbsp;
                                @endif
                            @endauth






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

    <main class="py-4"  >
        @yield('content')
    </main>
    @yield('capacity')

</div>
</body>
</html>
