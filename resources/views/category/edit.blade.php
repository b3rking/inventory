@extends('app')
@section('title', 'edit '.$category->name)
@section('content')

    <h1>edit {{ $category->name }}</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach    
    </ul>
    @endif
    <form action="{{ route('categories.update', $category->id) }}" method="PUT">
        @csrf
        <div class="">
            <label for="name">name</label>
            <input type="text" name="name" value="{{ $category->name }}">
        </div>
        <input type="hidden" name="user_id" value="{{ $category->user_id }}">
        <button type="submit">update</button>
    </form>

@endsection