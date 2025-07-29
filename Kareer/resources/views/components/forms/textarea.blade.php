@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'scheme-dark rounded-2xl bg-white/5 border border-white/10 py-3 px-4 mt-1 w-full max-w-2xl focus:outline-none',
        'rows' => "5"
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}>{{ old($name) }}</textarea>
</x-forms.field>
