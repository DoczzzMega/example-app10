@props(['connectorId' => ''])

@php($id = Str::uuid()) {{-- Для генерации уникальных id --}}

<div class="form-check">

    <input type="checkbox" {{ $attributes->merge([
    'value' => 1
]) }}  class="form-check-input" id="{{ $connectorId }}">

    <label class="form-check-label" for="{{ $connectorId }}">

        {{ $slot }}

    </label>

</div>
