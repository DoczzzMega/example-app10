@extends('layouts.main')

@section('page.title', 'Мой пост')

@section('main.content')

    <x-title>

        {{ __('Пост №') . $post->id }}

        <x-slot name="link">

            <a href="{{ route('user.posts.index') }}">
                {{ __('Назад') }}
            </a>

        </x-slot>

        <x-slot name="right">

            <x-button-link href="{{ route('user.posts.edit', $post->id) }}">
                {{ __('Изменить') }}
            </x-button-link>

        </x-slot>

    </x-title>

    @if(empty($post))
        <h5>Нет одного поста</h5>
    @else
        <div class="mb-4">

            <h2 class="h4">
                {{ $post->title }}
            </h2>

            <div class="small text-muted">

                {{ now()->format('d.m.Y H:i:s') }}

            </div>

            <div class="pt-3">

                {!! $post->content !!}

            </div>

        </div>

    @endif

@endsection
