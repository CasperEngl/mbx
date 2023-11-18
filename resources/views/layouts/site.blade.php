<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') - MBX</title>

  <script src="https://unpkg.com/htmx.org@1.9.8" integrity="sha384-rgjA7mptc2ETQqXoYC3/zJvkU7K/aP44Y+z7xQuJiVnB/422P/Ak+F/AqFR7E4Wr" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/hyperscript.org@0.9.12"></script>

  @vite('resources/css/site.css')
</head>
<body class="antialiased">
  @include('partials.header')

  <main class="container">
    @yield('content')
  </main>

  @include('partials.footer')

  @vite('resources/js/site.js')
</body>
</html>
