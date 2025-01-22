@props(['required' => false])

<label {{ $attributes->class([
    'form-label',
    ($required ? 'required' : ''),

]) }}>

    {{ $slot }} {{ $right_error ?? '' }}

</label>
