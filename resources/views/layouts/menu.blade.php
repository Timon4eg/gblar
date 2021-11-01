@section('menu')
<ul class="top-menu left-menu">
    <li class="top-menu-item"><a href="{{ route ('index') }}">Главная</a></li>
    <li class="top-menu-item"><a href="{{ route ('about') }}">О нас</a></li>
    <li class="top-menu-item"><a href="{{ route ('news') }}">Новости</a>
        <ul class="sub-menu">
            <li class="sub-menu-item"><a href="/categories/sport">Спорт</a></li>
            <li class="sub-menu-item"><a href="/categories/politic">Политика</a></li>
        </ul>
    </li>
</ul>
<ul class="top-menu right-menu">
    <li class="top-menu-item"><a href="{{ route ('admin-main') }}">Админка</a></li>
</ul>
@endsection
