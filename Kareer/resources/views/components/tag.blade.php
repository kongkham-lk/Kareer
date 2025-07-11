@props(['tag', 'size' => 'sm', 'attachUrl' => false])

@php
    $classes = "bg-white/10 ";

    if ($size == 'lg')
        $classes .= "rounded-xl py-2 px-3.5 text-sm";
    elseif ($size == 'sm')
        $classes .= "rounded-lg py-1.5 px-2 text-2xs";

    if ($attachUrl)
        $classes .= " hover:bg-white/25 transition-colors duration-300"
@endphp

@if($attachUrl)
    <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
@else
    <div class="{{ $classes }}">{{ $tag->name }}</div>
@endif
