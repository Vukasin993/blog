<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand" href="/posts">PostBook</a>

@if (Auth::check())
    <a href="/logout">Logout</a>
@else
    <a href="/register">Register</a>
@endif

</nav>
<!--
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>

-->
    <div class="container">
        @yield('content')
    </div>

   
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>