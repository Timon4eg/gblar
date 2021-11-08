@extends('admin.layouts.main')

@section('title', 'Раздел 2')

@section('menu')
	@include('admin.layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Второй раздел админки</div>

                <div class="card-body">
                    Здесь будет текст второй админской страницы
                </div>
            </div>
        </div>
    </div>
</div>
@endsection