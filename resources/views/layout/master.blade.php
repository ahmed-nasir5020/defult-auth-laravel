<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="{{assets('css/css.css')}}"> --}}
</head>
<body>
  <div>nav</div>

  @yield('body')
  <div>footer </div>
    {{-- <script src="{{assets('js/js.js')}}"></script> --}}
</body>
</html>