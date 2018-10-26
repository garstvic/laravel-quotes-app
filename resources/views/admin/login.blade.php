@extends('layouts.master')

@section('content')
<section class="login">
    <form action="" method="post">
        <div class="input-group">
            <label for="login">Your Login</label>
            <input type="text" name="login" id="login" placeholder="Your Login">
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