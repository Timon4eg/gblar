@extends('layouts.main')

@section('title', 'Одна новость')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->text }}</p>
@endsection