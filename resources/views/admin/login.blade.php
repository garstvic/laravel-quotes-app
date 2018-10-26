@extends('layouts.master')

@section('content')
@if(count($errors->all()) > 0)
    <section class="info-box fail">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </section>
@endif
@if(Session::has('fail'))
    <section class="info-box fail">
        {{ Session::get('fail') }}
    </section>
@endif
<section class="login">
    <form action="{{ route('admin.login') }}" method="post">
        <div class="input-group">
            <label for="name">Your Login</label>
            <input type="text" name="name" id="name" placeholder="Your Login">
        </div>
        <div class="input-group">
            <label for="password">Your Password</label>
            <input type="password" name="password" id="password" placeholder="Your Password">
        </div>
        <button class="btn" type="submit">Sign in</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
</section>
@endsection