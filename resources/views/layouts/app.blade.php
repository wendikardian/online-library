<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>App Name - @yield('title')</title>
</head>
<body>
    <img src="{{asset('images/timedoor-logo-black.svg')}}" alt="" class="logo">
    @section('sidebar')
        <p>This is master sidebar.</p>
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
