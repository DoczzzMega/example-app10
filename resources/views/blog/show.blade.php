@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <h1 class="mb-4">Просмотр поста {{ Route::currentRouteAction() }}</h1>

    <a class="mb-4 d-block" href="{{ route('blog.index') }}">Назад</a>

    <h4>{{ $post->title }}</h4>
    <p>{{ $post->content }}</p>

@endsection
