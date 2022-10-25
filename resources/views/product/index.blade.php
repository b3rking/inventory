@extends('app')
@section('title', 'products list')
@section('content')
    {{-- <h1>List of all products</h1> --}}
    <x-ui.maintitle content="List of all products" />
    <a href="{{ route('products.create') }}">add product</a>
    <ul>
        @foreach ($products as $product)
        <li>
            <div class="">
                <p>
                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                    <p>category : {{ $product->category->name }}</p>
                    <p>user : {{ $product->user->name }}</p>
                </p>
                <a href="{{ route('products.edit', $product->id) }}">edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    
@endsection