<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.min.css')}}">

    <title>Online Library - @yield('title')</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="{{asset('images/pro.png')}}" width="150px">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('books.index')}}">Home</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" action="{{route('books.index')}}" method="POST">
                        @method('get')
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search" >
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </form>
                    <!-- <button type="submit" class="btn btn-default"></button> -->
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./login.html">Login</a></li>
                        <li class="disabled"><a href="#">Signup</a></li>
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
