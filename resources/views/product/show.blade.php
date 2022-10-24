@extends('app')
@section('title', $product->name)
@section('content')
    <h1>{{ $product->name }}</h1>
    <ul>
        <li>created by {{ $product->user->name }}</li>
        <li>purchased for ${{ $product->purchase_price }}</li>
        <li>sell for ${{ $product->sell_price }}</li>
        <li>available since {{ \Carbon\Carbon::create($product->created_at)->diffForHumans() }}</li>
    </ul>
@endsection