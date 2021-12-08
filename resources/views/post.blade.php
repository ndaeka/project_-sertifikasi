@extends('layouts.main')

@section('container')

    <article class="mb-5">
        <h2>{{ $post["title"] }}</h2>
        <h5>Oleh: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
        <a href="/article">Kembali</a>

 @endsection
    