@extends('admin.layouts.main')

@section('title', 'Главная')

@section('menu')
	@include('admin.layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Главная админская страница</div>

                <div class="card-body">
                    Здесь будет текст главной админской страницы
                </div>
            </div>
        </div>
    </div>
</div>
@endsection