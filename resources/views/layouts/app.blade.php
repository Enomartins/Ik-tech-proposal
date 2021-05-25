<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rent Car</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- CSS only -->
    
    <link href = {{ asset("/bootstrap.min.css") }} rel="stylesheet" />
    <style>
        .footer {
            position: fixed;
            bottom: 0vh;
        }
        
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-warning" href="{{ url('/') }}">
                    Car Shop
                </a>
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
                        
                            {{-- <li class="nav-item">
                                <a href="/cart" class="btn btn-primary" aria-label="View 3 items in your shopping cart">
                                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                                  </a>                                  
                            </li> --}}
                           
                           
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <div class="footer d-flex bg-dark w-100">

        <p class="font-weight-bold pt-3 mx-auto text-white">copyright&copy; 2021 - IK tech</p>

    </div>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
</body>
</html>
