<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Template Query --}}
    
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    {{-- Asset Style --}}
    <link rel="stylesheet" href="{{ asset('template/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap-select.less') }}">
    {{-- <link rel="stylesheet" href="{{ asset('template/assets/scss/style.css') }}"> --}}

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
    {{-- End Template Query --}}

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">

    {{-- ionicons --}}
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-column flex-md-row">
            {{-- sidbar --}}
            @include('layouts.sidebar')
                
            {{-- content --}}
            <main class="col bg-faded py-3 flex-grow-1">
                {{-- navbar --}}
                @include('layouts.navbar')

                {{-- content --}}
                @yield('content')

                {{-- footer --}}
                {{-- @include('layouts.footer') --}}
            </main>  
        </div>
    </div>

    {{-- Script Template --}}
    
    <script src="{{ asset('template/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('template/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

    {{-- End Template Script --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --}}

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
     
    <script src="{{ url('assets/js/page/modules-ion-icons.js') }}"></script>

</body>
</html>
