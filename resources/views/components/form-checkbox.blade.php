@props(['connectorId' => '', 'text' => ''])

@php($id = Str::uuid()) {{-- Для генерации уникальных id --}}

@php($text = ($text ? 'form-text' : ''))

<div class="form-check">

    <input type="checkbox" {{ $attributes->merge([

    'value' => 1,
    'checked' => false,
//    'checked' => !! old($attributes->get('name')),

]) }}  class="form-check-input" id="{{ $connectorId }}">

    <label class="form-check-label {{ $text }}" for="{{ $connectorId }}">

        {{ $slot }}

    </label>

</div>
