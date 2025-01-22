@props(['name' => ''])

@error($name)

<div class="small text-danger pb-2 ">
    {{ ' ' . $message }}
</div>

@enderror
