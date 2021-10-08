<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

@if(app()->getLocale()=='ar')
<link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=cairo" rel="stylesheet">
@else


<link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
@endif


</head>
<body>
    <div id="app">
      @include('inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
