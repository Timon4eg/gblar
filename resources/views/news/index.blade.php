@extends('layouts.main')

@section('title', 'Новости')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
    <h2>Здесь все новости</h2>
    @foreach ($allNews as $news)
        <h3><a href="/news/{{ $news->id }}">{{ $news->title }}</a></h3>        
    @endforeach
@endsection