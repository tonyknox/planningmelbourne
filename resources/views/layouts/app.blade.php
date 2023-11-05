<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Planning Melbourne') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    @vite(['resources/css/app.css', 'public/css/app.css', 'public/css/knox_screen.css', 'resources/js/app.js', 'public/js/app.js', 'public/js/picturefill.min.js'])
    
</head>
<body>

    <div id="app" style="margin-top:-50px;">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="mx-auto">
                    <a class="navbar-brand mx-auto d-block" href="{{route('welcome')}}">&nbsp;&nbsp;<img src="/images/header/pm_header.png" alt="Planning Melbourne heading" width="50%"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="p-2 -ml-2">
                        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">    -->
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <div class="navbar-nav" style="margin-top:-24px;ffont-family:bankgothic_medium, Arial, Helvetica, sans-serif;">
                                <a class="nav-item nav-link" href="{{route('welcome')}}">Home</a>
                                <a class="nav-item nav-link" href="{{route('books.index')}}">Publications</a>
                                <a class="nav-item nav-link" href="{{route('articles.index')}}">Articles</a>
                                <a class="nav-item nav-link" href="{{route('people.index')}}">People</a>
                                <a class="nav-item nav-link" href="{{route('places.index')}}">Places</a>
                                <a class="nav-item nav-link" href="/directories/3">Contact</a>
                            </div>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        
                    </div>

                </div>
            </nav>
        </div>
        <main class="py-4">
            <div class="block w95 centre_one">
                <div class="container-fluid">
                    @yield('content')
                    @yield('sidebar')
                    @yield('footer')
                    @yield('vars')
            </div>
         </div>

        <div class="container">
            @yield('content2')     
        </div>
     </main>

</body>
</html>
