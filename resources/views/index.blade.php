@extends('layouts.master')

@section('title')
    Trending quotes
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" />
@endsection

@section('content')
    @if(!empty(Request::segment(1)))
        <section class="filter-bar">
            A filter has been set! 
            <a href="{{ route('index') }}">Show all quotes</a>
        </section>
    @endif
    @if(count($errors->all()) > 0)
        <section class="info-box fail">
            <div>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        </section>
    @endif
    @if(Session::has('success'))
        <section class="info-box success">
            <div>
                {{ Session::get('success') }}
            </div>
        </section>
    @endif
    <section class="quotes">
        <h1>Latest Quotes</h1>    
        @for($i = 0; $i < count($quotes); $i = $i + 1)
            <article class="quote">
                <div class="delete"><a href="{{ route('delete', ['quote_id' => $quotes[$i]->id]) }}">x</a></div>
                {{ $quotes[$i]->quote }}
                <div class="info">Create by <a href="{{ route('index', ['author' => $quotes[$i]->author->name]) }}">{{ $quotes[$i]->author->name}}</a> on {{ $quotes[$i]->created_at}}</div>
            </article>
        @endfor
        <div class="pagination">
            @if($quotes->currentPage() !== 1)
                <a href="{{ $quotes->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
            @endif
            @if($quotes->currentPage() !== $quotes->lastPage() && $quotes->hasPages())
                <a href="{{ $quotes->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
            @endif
        </div>
    </section>
    <section class="edit-quote">
        <h1>Add a Quote</h1>
        <form method="post" action="{{ route('create') }}">
            <div class="input-group">
                <label for="author">Your Name</label>
                <input type="text" name="author" id="author" placeholder="Your Name"/>
            </div>
            <div class="input-group">
                <label for="email">Your E-Mail</label>
                <input type="text" name="email" id="email" placeholder="Your E-Mail">
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