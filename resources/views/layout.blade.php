<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Bookia">
    <title>Bookia - @yield('title')</title>

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/app.js') }}"></script>
</head>
<body class="voyager">
<div class="app-container">
    <div class="container-fluid">
        @yield('page_header')
        @yield('content')
    </div>
</div>
@yield('javascript')
</body>
</html>
