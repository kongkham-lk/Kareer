@props(['hover' => true])
@php
    $classes = "p-5 bg-white/5 rounded-xl flex gap-6 border border-white/5 transition-colors duration-150 group";

    if ($hover)
        $classes .= " hover:border-blue-800";
@endphp
<div {{$attributes->merge(["class"=>$classes])}}>
    {{ $slot }}
</div>

