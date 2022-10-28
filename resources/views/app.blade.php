<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" />
    <title>Inventory - @yield('title', 'dashboard')</title>
</head>
<body class="bg-gray-50">
    <header class="flex flex-row justify-between py-2 px-6">
    <h1><a href="{{ route('dashboard') }}" class="text-2xl font-bold">DASHBOARD</a></h1>
    <div class="flex flex-row justify-around">
        @auth    
        <p class="mx-2 font-semibold">{{ Auth::user()->name }}</p>
        <form action="/auth/logout" method="post">
            @csrf
            <button type="submit">logout</button>
        </form>
        </header>
        @endauth
    </div>
    <main class="px-4 py-2 flex flex-row">
        <div class="side-menu w-1/6 bg-gray-200 rounded-md p-3 h-auto max-h-96">
            <ul>
                <li class="py-2 px-4 font-semibold rounded-md hover:bg-slate-50"><a href="{{ route('categories.index') }}">Categories</a></li>
                <li class="py-2 px-4 font-semibold rounded-md hover:bg-slate-50"><a href="{{ route('products.index') }}">Products</a></li>
                <li class="py-2 px-4 font-semibold rounded-md hover:bg-slate-50"><a href="{{ route('clients.index') }}">Clients</a></li>
                <li class="py-2 px-4 font-semibold rounded-md hover:bg-slate-50"><a href="{{ route('users.index') }}">Users</a></li>
            </ul>
        </div>
        <div class="content px-4 py-4 flex flex-row bg-gray-200 rounded-md p-3 ml-4 w-screen">
            @yield('content')
        </div>
    </main>
    <script src="/js/app.js"></script>
</body>
</html>