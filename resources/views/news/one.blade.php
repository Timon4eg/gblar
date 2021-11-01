@extends('layouts.main')

@section('title', 'Одна новость')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
    Здесь будут одна новость {{ $id }}
@endsection