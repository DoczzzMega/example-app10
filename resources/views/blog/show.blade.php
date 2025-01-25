@extends('layouts.main')

@section('page.title', $post->title)

@section('main.content')



    <x-title>

        {{ $post->title }}

        <x-slot name="link">

            <a href="{{ route('blog.index') }}">
                {{ __('Назад') }}
            </a>

        </x-slot>

    </x-title>

    {!! $post->content !!}

    <div class="small text-muted mt-3">
        {{ $post->published_at->format('d.m.Y H:i:s') }}
    </div>

@endsection
