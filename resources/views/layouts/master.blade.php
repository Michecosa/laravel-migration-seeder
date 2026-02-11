<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title','EX - Tabellone Treni')</title>
  @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
  <div class="d-flex flex-column" style="min-height: 100vh">
    @include('partials.header')

    <div class="flex-grow-1">
      @yield('main-content')
    </div>

    @include('partials.footer')
  </div>
</body>
</html>