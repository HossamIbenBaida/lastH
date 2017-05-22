<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}- @yield('title')</title>


    <!-- Styles -->

    {{ Html::style('css/app.css') }}
    {{ Html::style('css/font-awesome.css') }}
    {{ Html::style('css/select2.min.css') }}
    <link href="{{ asset('css/transition.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inline.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/s2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/v2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/typo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tst.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">

    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
    @yield('js')

</body>
</html>
