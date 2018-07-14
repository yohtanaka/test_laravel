<!DOCTYPE html>
<html>
<head>
  <title>Test: @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  @include('layouts.header')
  <div id="content">
    @yield('content')
  </div>
  @include('layouts.footer')
</body>
</html>
