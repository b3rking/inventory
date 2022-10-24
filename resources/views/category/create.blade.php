@extends('app')
@section('title', 'New Category')
@section('content')

    <h1>Add new category</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach    
    </ul>
    @endif
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="">
            <label for="name">name</label>
            <input type="text" name="name" id="" placeholder="fruits">
        </div>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit">Create</button>
    </form>

@endsection