@extends('layouts.app')
@section('title', 'create post')
@section('content')
    <form class="form-group" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control m-5" name="name" placeholder="name" required>
        <input type="text" class="form-control m-5" name="title" placeholder="title" required>
        <textarea name="description" class="form-control m-5" id="" cols="30" rows="10" placeholder="description" required></textarea>
        
        <select class="form-control m-5" name="section_id">
            <option @selected(true)>slect section</option>
            @foreach ($sections as $section)
                <option value='{{ $section->id }}'>{{ $section->name }}</option>
            @endforeach
        </select>
        <input class="btn btn-primary ml-3" type="submit" value="create">
    </form>
@endsection
