<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory - @yield('title', 'dashboard')</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    @auth    
    <p>{{ Auth::user()->name }}</p>
    <form action="/auth/logout" method="post">
        @csrf
        <button type="submit">logout</button>
    </form>
    @endauth
    @yield('content')
</body>
</html>