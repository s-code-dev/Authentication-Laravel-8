<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="/">Главная</a>
    </li>
    <li>
        <a class="nav-link" href="/project">Проект</a>
    </li>
    <li>
        <a class="nav-link" href="/news/category">Категории</a>
    </li>
    <li>
        <a class="nav-link" href="/news">Новости</a>
    </li>

    @auth

        @if(\Auth::user()->hasRole('admin'))
    <li>
        <a class="nav-link" href="{{route('admin.index')}}">Админка</a>
    </li>
        @endif
    @endauth
</ul>
