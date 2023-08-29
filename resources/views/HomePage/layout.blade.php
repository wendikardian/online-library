<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
    <!-- import resources/js/app.js -->
    <!-- <script src="{{asset('js/app.js')}}"></script> -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.min.css')}}">

    <title>Online Library - @yield('title')</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 space-evenly" style="display:flex; flex-direction: row; justify-content: space-between !important; width: 200%">
                    <div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img alt="Brand" src="{{asset('images/pro.png')}}" width="150px">
                            </a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('books.index')}}">Home</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" action="{{route('books.index')}}" method="POST">
                            @method('get')
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </form>
                        <!-- <button type="submit" class="btn btn-default"></button> -->
                        </form>
                    </div>
                    <ul class="navbar-nav ms-auto" style="display:flex; width: 50%; flex-direction: row; justify-content: flex-end !important;">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item " style="margin-right: 40px;">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        @yield('content')
        @section('pagination')
        @show

        <!-- footer -->
        <div class="panel panel-default">
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="text-center" id="center-content">
                            <img src="{{asset('images/pro.png')}}" alt="logo" width="150px">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="text-center">
                            <h4>Timedoor Academy Pro - Online Library</h4>
                            <p>Copyright 2023 &copy; All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="row" id="center-content">
                            <div class="col-sm-4 col-md-1">
                                <a href="#"><i class="fab fa-lg fa-facebook"></i></a>
                            </div>
                            <div class="col-sm-4 col-md-1">
                                <a href="#"><i class="fab fa-lg fa-instagram"></i></a>
                            </div>
                            <div class="col-sm-4 col-md-1">
                                <a href="#"><i class="fab fa-lg fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
