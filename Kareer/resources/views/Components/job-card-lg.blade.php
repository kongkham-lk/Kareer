@props(['job', 'employer'])
@php
    $employer = $job->employer;
@endphp

<a href="{{ $job->url }}" target="_blank">
    <x-job-card-container class="">
        <div>
            <x-employer-logo :size="100" :$employer/>
        </div>
        <div class="flex flex-col flex-1">
            <div class="text-sm text-gray-400">{{ $employer->name }}</div>
            <h3 class="text-xl font-bold mt-2 transition-colors duration-150">
                {{ $job->title }}
            </h3>
            <p class="text-sm text-gray-400 mt-auto">{{ $job->type }} - {{ $job->salary }}</p>
        </div>
        <div class="flex flex-wrap items-start justify-end gap-3 flex-[1.5]">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
    </x-job-card-container>
</a>
