@extends('layouts.main')

@section('title', 'Категории')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
    <h2>Здесь все категории</h2>
    @foreach ($categories as $category)
        <h3><a href="/categories/{{ $category->code }}">{{ $category->name }}</a></h3>        
    @endforeach
@endsection