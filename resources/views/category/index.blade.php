@extends('app')
@section('title', 'Categories list')
@section('content')
    <h1>List of all categories</h1>
    <a href="{{ route('categories.create') }}">add category</a>
    <ul>
        @foreach ($categories as $category)
        <li>
            <div class="">
                <p>
                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                </p>
                <a href="{{ route('categories.edit', $category->id) }}">edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    
@endsection