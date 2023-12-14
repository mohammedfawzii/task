@extends('layouts.app')

@section('title', 'edit section')
@section('content')
    <form class="form" action="{{ route('sections.update' ,$section->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" class="form-control m-5" name="name" value="{{ $section->name }}">
        <input type="text" class="form-control m-5"  name="title"value="{{ $section->title }}">
        <input  class="btn btn-primary ml-3" type="submit" value="update">
    </form>
@endsection
