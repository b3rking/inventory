@extends('app')
@section('title', 'edit '.$product->name)
@section('content')

    <h1>edit {{ $product->name }}</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach    
    </ul>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="">
            <label for="name">name</label>
            <input type="text" name="name" id="" placeholder="mangoes" required value="{{ $product->name }}">
        </div>
        <div class="">
            <label for="quantity">quantity</label>
            <input type="text" name="quantity" placeholder="1" required value="{{ $product->quantity }}">
        </div>
        <div class="">
            <label for="category">category</label>
            <select name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? "selected": "" }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="">
            <label for="purchase_price">purchase price</label>
            <input type="number" name="purchase_price" placeholder="100" step="50" value="{{ $product->purchase_price }}">
        </div>
        <div class="">
            <label for="sell_price">sell price</label>
            <input type="number" name="sell_price" placeholder="100" step="50" value="{{ $product->sell_price }}">
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit">update</button>
    </form>

@endsection