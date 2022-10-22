@extends('app')
@section('title', 'register')
@section('content')
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach    
    </ul>
    @endif
    <h2>Register</h2>
    <form action="/auth/register" method="post">
        @csrf
        <div class="">
            <label for="email">Email Adress</label>
            <input type="email" name="email" id="" placeholder="user@b3rking.com">
        </div>
        <div class="">
            <label for="name">Full name</label>
            <input type="text" name="name" id="" placeholder="b3rking daQuan">
        </div>
        <div class="">
            <label for="password">password</label>
            <input type="password" name="password" id="" placeholder="****">
        </div>
        <div class="">
            <label for="password_confirmation">confirm password</label>
            <input type="password" name="password_confirmation" id="" placeholder="****">
        </div>
        <button type="submit">register</button>
    </form>
@endsection