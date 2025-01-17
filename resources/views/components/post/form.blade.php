@props(['post' => null])

<x-form {{ $attributes->merge([
    'method' => 'post'
]) }}>

    <x-form-item>

        <x-form-label for="title" required>
            {{ __('Название поста') }}
        </x-form-label>

        <x-form-input name="title" value="{{ $post->title ?? '' }}" id="title" autofocus/>

    </x-form-item>

    <x-form-item>

        <x-form-label for="content" required>
            {{ __('Содержание поста') }}
        </x-form-label>

        {{--            <x-form-textarea name="content" rows="8" id="content"/>--}}

        <x-trix name="content" value="{{ $post->content ?? '' }}"/>

    </x-form-item>

    <x-button type="submit">
        {{ __($post ? 'Изменить пост' : 'Создать пост') }}
    </x-button>

</x-form>
