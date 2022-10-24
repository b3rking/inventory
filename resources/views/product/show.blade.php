@extends('app')
@section('title', $category->name)
@section('content')
    <h1>{{ $category->name }}</h1>
    <ul>
        <li>created by {{ $category->user->name }}</li>
        <li>available since {{ \Carbon\Carbon::create($category->created_at)->diffForHumans() }}</li>
    </ul>
@endsection