@extends('app')
@section('title', 'Categories list')
@section('content')
    <h1>List of all categories</h1>
    <a href="{{ route('categories.create') }}">add category</a>
    <ul>
        @foreach ($categories as $category)
        <li>{{ $category }}</li>
        @endforeach
    </ul>
    
@endsection