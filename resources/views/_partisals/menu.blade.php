<ul class="navbar-nav mr-auto">
    @if (!\Auth::check())  
    <li>
        <a class="nav-link" href="<?= route('reg') ?>">Registration</a>
    </li>
    <li>
        <a class="nav-link" href="<?= route('login') ?>">Login</a>
    </li>
    @endif
    @auth
    <li>
        <a class="nav-link text-end" href="<?= route('admin') ?>">Admin</a>
    </li>
    @endauth

</ul>

<ul class="navbar-nav  d-flex justify-content-end">

    @auth

    <li>
        <a class="nav-link text-end" href="<?= route('logout') ?>">Logout</a>
    </li>

    @endauth

<ul class="navbar-nav mr-auto">