@extends('app')
@section('title', 'login')
@section('content')
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach    
    </ul>
    @endif
    <form action="/auth/login" method="post">
        @csrf
        <div class="">
            <label for="email">Email Adress</label>
            <input type="email" name="email" id="" placeholder="user@b3rking.com">
        </div>
        <div class="">
            <label for="password">password</label>
            <input type="password" name="password" id="" placeholder="****">
        </div>
        <button type="submit">sign in</button>
    </form>
@endsection