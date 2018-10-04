<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body>
        <!-- Public area navbar -->
        @include('includes.navbar')
        
        <!-- error massage -->
        @include('includes.error')
                
        <!-- main body for page -->
        @yield('content')
        
        <!-- copy Right for all page -->
        @include('includes.copy')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>
</html>