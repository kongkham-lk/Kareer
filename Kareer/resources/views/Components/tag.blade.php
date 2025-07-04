@props(['tag', 'size' => 'sm'])

@php
    $classes = "bg-white/10 hover:bg-white/25 transition-colors duration-300 ";

    if ($size == 'lg')
        $classes .= "rounded-xl py-2 px-3.5 text-sm";
    elseif ($size == 'sm')
        $classes .= "rounded-lg py-1.5 px-2 text-2xs";
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
