@if(!Auth::check())
<a href="{{ route('admin.login') }}">Admin</a>
@endif

@if(Auth::check())
    <a href="{{ route('admin.logout') }}">Logout</a>
@endif