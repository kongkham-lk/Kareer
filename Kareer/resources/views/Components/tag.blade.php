@props(['tag', 'size' => 'sm'])

@php
    $classes = "bg-white/10 hover:bg-white/25 transition-colors duration-300 ";

    if ($size == 'lg')
        $classes .= "rounded-4xl py-1 px-3 text-sm";
    elseif ($size == 'sm')
        $classes .= "rounded-2xl py-1.5 px-2 text-2xs";
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
