<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Test: @yield('title')</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
  @include('layouts.header')
  <div id="content">
    @yield('content')
  </div>
  @include('layouts.footer')
</body>
</html>
