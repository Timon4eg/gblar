@section('menu')
<ul class="top-menu left-menu">
    <li class="top-menu-item"><a href="{{ route ('index') }}">Главная</a></li>
    <li class="top-menu-item"><a href="{{ route ('about') }}">О нас</a></li>
    <li class="top-menu-item"><a href="{{ route ('news') }}">Новости</a></li>
</ul>
<ul class="top-menu right-menu">Админ-меню
    <li class="top-menu-item"><a href="{{ route ('test1') }}">Раздел1</a></li>
    <li class="top-menu-item"><a href="{{ route ('test2') }}">Раздел2</a></li>
</ul>
@endsection