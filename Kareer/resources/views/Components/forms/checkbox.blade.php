@props(['label', 'name', 'subLabel'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="rounded-2xl bg-white/5 border border-white/10 py-3.5 px-4 mt-2 w-full max-w-2xl">
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $subLabel }}</span>
    </div>
</x-forms.field>

