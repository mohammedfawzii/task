@extends('layouts.app')
@section('title', 'post')
@section('content')
    <h1>show all post</h1>
    <button class="btn btn-primary ml-3">
        <a href="{{ route('posts.create') }}">create post</a>
    </button>
    <div class="continer">

        <section>
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            @foreach ($posts as $post)
                <article>
                    <div class="haeder-post">
                        <div class="title-group">
                            <p class="article-title"> NAME : {{ $post->name }}</p>
                            <p class="article-section"> TITLE : {{ $post->title }}</p>
                            <p class="article-section"> SECTION : {{ $post->section->name }}</p>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="delet">
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="article-text">{{ $post->description }}</div>
                </article>
            @endforeach
        </section>
    </div>

@endsection
