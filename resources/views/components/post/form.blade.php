@props(['post' => null])

<x-form {{ $attributes->merge([
    'method' => 'post'
]) }}>

    <x-form-item>

        <x-form-label for="title" required>

            {{ __('Название поста') }}

            <x-slot name="right_error">



            </x-slot>

        </x-form-label>

        <x-error name="title"/>

        <x-form-input name="title" value="{{ $post->title ?? old('title') }}" id="title" autofocus/>



    </x-form-item>

    <x-form-item>

        <x-form-label for="content" required>
            {{ __('Содержание поста') }}
        </x-form-label>

        <x-error name="content"/>

        {{--            <x-form-textarea name="content" rows="8" id="content"/>--}}

        <x-trix name="content" value="{{ $post->content ?? old('content') }}"/>

    </x-form-item>

    <x-button type="submit">
        {{ __($post ? 'Сохранить' : 'Создать пост') }}
    </x-button>

</x-form>

