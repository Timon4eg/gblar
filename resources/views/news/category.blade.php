@extends('layouts.main')

@section('title', 'Новости')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Здесь все новости категории {{ $category->name }}</div>

                <div class="card-body">
                    @foreach ($newsFromCategory as $news)
                        <h3><a href="/news/{{ $news->id }}">{{ $news->title }}</a></h3>        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection