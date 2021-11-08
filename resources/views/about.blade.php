@extends('layouts.main')

@section('title', 'О нас')

@section('menu')
	@include('layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">О нас</div>

                <div class="card-body">
                    Здесь будет текст о нас
                </div>
            </div>
        </div>
    </div>
</div>
@endsection