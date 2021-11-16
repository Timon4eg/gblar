@extends('admin.layouts.main')

@section('title', 'Добавить новость')

@section('menu')
	@include('admin.layouts.menu')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Добавление новости</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="newsTitle">Заголовок новости</label>
                            <input type="text" name="title" id="newsTitle" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary" value="Добавить новость">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection