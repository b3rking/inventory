@extends('app')
@section('title', 'New product')
@section('content')

    <h1>Add new product</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach    
    </ul>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="">
            <label for="name">name</label>
            <input type="text" name="name" id="" placeholder="mangoes" required>
        </div>
        <div class="">
            <label for="quantity">quantity</label>
            <input type="text" name="quantity" placeholder="1" required>
        </div>
        <div class="">
            <label for="category">category</label>
            <select name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="">
            <label for="purchase_price">purchase price</label>
            <input type="number" name="purchase_price" step="50" placeholder="100">
        </div>
        <div class="">
            <label for="sell_price">sell price</label>
            <input type="number" name="sell_price" step="50" placeholder="100">
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit">Create</button>
    </form>

@endsection