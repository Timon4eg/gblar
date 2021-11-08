@extends('layouts.main')

@section('title', 'Одна новость')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $news->title }}</div>

                <div class="card-body">
                    {{ $news->text }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection