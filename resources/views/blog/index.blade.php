@extends('layouts.main')

@section('page.title', 'Блог')

@section('main.content')

    <x-title>
        {{ __('Список постов') }}
    </x-title>

    @include('blog.filter')

    @if(empty($posts))
        <h5>Нет ни одного поста</h5>
    @else
        <div class="row">

            @foreach($posts as $post)

                <div class="col-12 col-md-4">

                    <x-post.card :post="$post" />

                </div>

            @endforeach

        </div>

    @endif

@endsection
