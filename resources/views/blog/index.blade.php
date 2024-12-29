@extends('layouts.base')

@section('page.title', 'Блог')

@section('content')

    <h1 class="mb-5">Список постов</h1>

    @if(empty($posts))
        <h5>Нет ни одного поста</h5>
    @else
        @foreach($posts as $post)
            <div class="mb-4">
                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach
    @endif

@endsection
