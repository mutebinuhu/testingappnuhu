<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Home</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{!! asset('css/asset/Header-Nightsky.css')!!}" > 
        <link rel="stylesheet" type="text/css" href="{!! asset('css/asset/Header-Nightsky.js')!!}" > 
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

  

<body>
    <div class="header-nightsky">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login/">LOGIN</a></li>

                        <li><a href="register/">REGISTER</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1>This is ADC</h1>
            <p>To Be The Leading Communication And Management Partner In Africa</p>
            <a class="btn btn-primary" href="#">Learn more about us</a>
            <a class="btn btn-primary" href="#">Send Ticket</a>
        </div>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>


        </div>
    </body>
</html>
