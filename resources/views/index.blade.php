@extends('layouts.master')

@section('title')
    Trending quotes
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" />
@endsection

@section('content')
    <section class="quotes">
        <h1>Latest Quotes</h1>    
        <article class="quote">
            <div class="delete"><a href="#">x</a></div>QuoteTex
            <div class="info">Create by <a href="">V1CTH0R</a> on ...</div>
        </article>
        Pagination
    </section>
    <section class="edit-quote">
        <h1>Add a Quote</h1>
        <form>
            <div class="input-group">
                <label for="author">Your Name</label>
                <input type="text" name="author" id="author" placeholder="Your Name"/>
            </div>
            <div class="input-group">
                <label for="quote">Your Quote</label>
                <textarea name="quote" id="quote" cols="30" rows="5" placeholder="Your Quote"></textarea>
            </div>
            <button class="btn" type="submit">Submit Quote</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
    </section>
@endsection