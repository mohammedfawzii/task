@extends('layouts.app')
@section('title', 'section')
@section('content')
    <h1>show all section</h1>
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <button class="btn btn-success">
        <a href="{{ route('sections.create') }}">create section</a>
    </button>
    <section>

        <table class="table">
            <thead>
                <tr>
                    <th style="width: 3%">#</th>
                    <th style="width: 20%">NAME</th>
                    <th style="width: 30%">TITLE</th>
                    <th style="width: 47%">action</th>
                </tr>
            </thead>
            @foreach ($sections as $section)
                <tbody>
                    <tr>
                        <td>{{ $section->id }}</td>
                        <td>{{ $section->name }}</td>
                        <td>{{ $section->title }}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-success w-4"><a href="{{ route('posts.index') }}">show posts</a></button>
                                <button class="btn btn-primary w-4"><a  href="{{ route('sections.edit', $section->id) }}">edit</a></button>
                                <form action="{{ route('sections.destroy', $section->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger w-4" type="submit" value="delet">
                                </form>
                            </div>
                        </td>
                    </tr>

                </tbody>
            @endforeach
        </table>

    </section>

@endsection
