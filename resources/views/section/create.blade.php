@extends('layouts.app')
@section('title','create section')
@section('content')
<form class="form" action="{{ route('sections.store') }}" method="post">
    @csrf
    <input type="text"  class="form-control m-5" name="name" placeholder="name">
    <input type="text"  class="form-control m-5" name="title" placeholder="title">
    <input  class="btn btn-primary ml-3" type="submit" value="create">
    </form>

@endsection
