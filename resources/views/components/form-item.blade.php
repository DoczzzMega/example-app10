@props(['mb' => 3])



<div  {{ $attributes->class(['mb-'.$mb, ]) }}>

    {{ $slot }}

</div>
