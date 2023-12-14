@extends('layouts.home')
@section('content')
    <div class="continer">

        @foreach ($posts as $post)
            <article>
                <div class="haeder-post">
                    <div class="title-group">
                        <p class="article-title"> NAME : {{ $post->name }}</p>
                        <p class="article-section"> TITLE : {{ $post->title }}</p>
                        <p class="article-section"> SECTION : {{ $post->section->name }}</p>
                    </div>

                </div>
                <hr>
                <div class="article-text">{{ $post->description }}</div>
            </article>
        @endforeach
    </div>

@endsection
