@extends('layouts.main')

@section('container')
    
    @foreach ($post as $posted)
    <article class="mb-5">
        <h2><a href="/article/{{ $posted["slug"] }}">{{ $posted["title"] }}</a></h2>
        <h5>Oleh: {{ $posted["author"] }}</h5>
        <p>{{ $posted["body"] }}</p>
    </article>
        
    @endforeach
 @endsection
    