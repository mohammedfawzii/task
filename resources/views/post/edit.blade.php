@extends('layouts.app')

@section('title', 'edit post')
@section('content')
    <form class="form" action="{{ route('posts.update' ,$post->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" class="form-control m-5" name="name" value="{{ $post->name }}">
        <input type="text" class="form-control m-5" name="title"value="{{ $post->title }}">
        <input type="text" class="form-control m-5" name="description"value="{{ $post->description }}">
        <select  class="form-control m-5" name="section_id">
            @foreach ($sections as $section)
                <option value='{{ $section->id }}'>{{ $section->name }}</option>
            @endforeach
        </select>
        <input class="btn btn-primary ml-3"  type="submit" value="update">
    </form>
@endsection
