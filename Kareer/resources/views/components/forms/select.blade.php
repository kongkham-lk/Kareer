@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-2xl bg-white/5 border border-white/10 py-3.5 px-4 mt-1 w-full max-w-2xl focus:outline-none'
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>

