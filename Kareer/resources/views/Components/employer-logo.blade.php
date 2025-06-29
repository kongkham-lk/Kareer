@props(['employer','size'])

{{-- asset() help prepare url nicely --}}
<img class="rounded-xl" src="{{ asset("$employer->logo") }}" alt="logo" width="{{ $size }}">
