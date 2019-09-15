<div class="o-header__container">
    <a href="/">
        <h1 class="a-header__title">StackITP</h1>
    </a>
    <div class="m-link__container">
        <a class="a-header__link" href="/">Home</a>
        @if (!Auth::check())
        <a class="a-header__link" href="{{ route('login') }}">Login</a>
        <a class="a-header__link" href="{{ route('register') }}">Sign up</a>
        @else
        <a class="a-header__link" href="/profile">Profile</a>
        @endif
    </div>
</div>