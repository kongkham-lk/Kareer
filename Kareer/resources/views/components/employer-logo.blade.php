@props(['employer','size'])

{{-- asset() help prepare url nicely --}}
<img
    class="rounded-xl border border-neutral-800 bg-neutral-800/20"
    src="{{ asset("$employer->logo") }}"
    alt="logo"
    onerror="this.style='padding:30%; text-align:end; align-content:center;'"
    width="{{ $size }}"
    height="{{ $size }}"
>


