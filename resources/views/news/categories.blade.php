@extends('layouts.main')

@section('title', 'Категории')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Здесь все категории</div>

                <div class="card-body">
                    @foreach ($categories as $category)
                    <h3><a href="/categories/{{ $category->code }}">{{ $category->name }}</a></h3>        
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection