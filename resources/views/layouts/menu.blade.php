@section('menu')
<ul class="top-menu left-menu">
    <li class="top-menu-item"><a href="{{ route ('index') }}">Главная</a></li>
    <li class="top-menu-item"><a href="{{ route ('about') }}">О нас</a></li>
    <li class="top-menu-item"><a href="{{ route ('categories') }}">Категории</a></li>
    <li class="top-menu-item"><a href="{{ route ('news') }}">Новости</a></li>
</ul>
<ul class="top-menu right-menu">
    <li class="top-menu-item"><a href="{{ route ('admin-main') }}">Админка</a></li>
</ul>
@endsection
