<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
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
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <img class="avatar" src="{{ url('/').'/'.Auth::User()->imgUrl }}"><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('home') }}">Dashboard</a></li>
                                    <li><a href="{{ url('home') }}">Messages</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <form class="navbar-form navbar-left" role="search" method="POST" action="{{action('OtherController@searchJobs')}}">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search jobs" name="search">
                                </div>
                                {!! Form::token() !!}
                                <button type="submit" class="btn btn-default">Find</button>
                            </form>
                        @endif
                        <li><a href="">Blog</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @if(Auth::check())
        <div class="start">
            <nav class="navbar navbar-inverse sidebar  navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        {{-- <a class="navbar-brand disabled sidebar-brand" href="#">EggMall</a> --}}
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{action('OtherController@home')}}">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                            <li ><a href="{{ url('/home') }}">Your Portfolio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                            <li ><a href="{{action('CompanyController@index')}}">Company Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
                            <li ><a href="{{action('OtherController@jobsSeeAll')}}">Jobs Finder<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
                            <li ><a href="{{action('RelationController@index')}}">Friends<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                            <li ><a href="">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                            <li ><a href="">History<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-film"></span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                                <ul class="dropdown-menu forAnimate" role="menu">
                                    <li><a href="#" >Settings</a></li>
                                    <li><a href="{{action('UserController@edit',Auth::User()->id)}}">Personal Info</a></li>
                                    @if(Auth::User()->role=="admin")
                                    <li ><a href="">Download Mock UP<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-gear"></span></a></li>
                                    <li ><a href="">Download Web<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-gear"></span></a></li>
                                    @endif
                                </ul>
                            </li>
                            <li ><a href="href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-off"></span></a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @endif

        @if(session('messages'))
            <div class="alert alert-success" role="alert">{{session('messages')}}</div>
        @endif

        @yield('content')

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Lorem</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>asd</li>
                            <li>asd</li>
                            <li>asd</li>
                            <li>asd</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            Copyright @ {{ config('app.name', 'Laravel') }} 20{{date("y")}}
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="{{asset('public/js/home.js')}}"></script>
</body>
</html>
