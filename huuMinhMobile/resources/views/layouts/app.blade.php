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

    <!-- ink rel="dns-prefetch" href="//fonts.gstatic.com"-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: #fffacc">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container" style="background: chartreuse">
                <a href="{{url('/')}}" class="mb-2">
                <img src="{{ asset('storage/images/anh3.gif') }} " width="300" height="50">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('phone.index')}}">HOME
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('phone.showCart')}}">
                CART
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <form action="{{route('setLang')}}" method="post" class="form-control" style="background-color: lime">
                        @csrf
                        <select name="language" class="form-control" onchange="this.form.submit()" style="color: #4c110f">
                            <option
                                @if(\Illuminate\Support\Facades\Session::has('language'))
                                @if(\Illuminate\Support\Facades\Session::get('language') == 'en')
                                selected
                                @endif
                                @endif
                                value="en"
                            >EN</option>
                            <option
                                @if(\Illuminate\Support\Facades\Session::has('language'))
                                @if(\Illuminate\Support\Facades\Session::get('language') == 'vi')
                                selected
                                @endif
                                @endif
                                value="vi"
                                >VN</option>

                        </select>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <form class="form-inline" action="{{route('phone.search')}}" method="get">
                                @csrf
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control
                                @if ($errors->has('search'))
                                        border-danger
                                @endif
                                        " name="search" placeholder="Name/ram">
                                    @if ($errors->has('search'))
                                        <p class="text-danger"><img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                                                    style="width: 20px ;height: 20px">{{$errors->first('search')}}</p>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-success">@lang('message.search')</button> &nbsp;
                            </form>
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
