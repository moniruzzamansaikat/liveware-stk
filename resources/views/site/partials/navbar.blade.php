<nav class="navbar">
    <div class="navbar__brand">
        <a href="{{ route('home') }}" wire:navigate>
            <img src="{{ asset('assets/images/logo.svg') }}" alt="">
        </a>
    </div>
    <ul class="navbar__links">
        <li class="navbar__item"><a wire:navigate href="{{ route('home') }}" class="navbar__link">Home</a></li>
        <li class="navbar__item"><a wire:navigate href="{{ route('about') }}" class="navbar__link">About</a></li>
        <li class="navbar__item"><a wire:navigate href="{{ route('contact') }}" class="navbar__link">Contact</a></li>

        @auth
            <a class="button" href="{{ route('user.dashboard') }}">Dashboard</a>
        @endauth

        @guest
            <a class="button" href="{{ route('login') }}">Login</a>
        @endguest
    </ul>
</nav>
