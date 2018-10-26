<header>
    <div class="title">
        {{ config('app.name') === null ? 'Trending quotes' : config('app.name') }}
    </div>
    <div class="nav">
        @if(!Auth::check())
        <a href="{{ route('admin.login') }}">Log in</a>
        @endif
        
        @if(Auth::check())
            <a href="{{ route('admin.logout') }}">Logout</a>
        @endif
    </div>
</header>