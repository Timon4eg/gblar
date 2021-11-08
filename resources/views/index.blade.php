@extends('layouts.main')

@section('title', 'Главная')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Главная страница</div>

                <div class="card-body">
                    Здесь будет текст главной страницы
                </div>
            </div>
        </div>
    </div>
</div>
@endsection