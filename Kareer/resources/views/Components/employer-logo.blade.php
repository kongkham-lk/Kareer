@props(['job','size'])

<img class="rounded-xl" src="{{ $job->employer->logo }}{{ $size }}" alt="employer logo">
