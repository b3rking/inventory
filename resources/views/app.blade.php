<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory - @yield('title', 'dashboard')</title>
</head>
<body>
    <header>
    <h1><a href="{{ route('dashboard') }}">DASHBOARD</a></h1>
    @auth    
    <p>{{ Auth::user()->name }}</p>
    <form action="/auth/logout" method="post">
        @csrf
        <button type="submit">logout</button>
    </form>
    </header>
    @endauth
    <main>
        <div class="side-menu">
            <ul>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('products.index') }}">Products</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('clients.index') }}">Clients</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('users.index') }}">Users</a></li>
            </ul>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
</body>
</html>