@props(['job', 'employer'])
@php
    $employer = $job->employer;
@endphp

<x-job-card-container>
    <div>
        <x-employer-logo :size="100" :$employer/>
    </div>
    <div class="flex flex-col flex-1">
        <div class="text-sm text-gray-400">{{ $employer->name }}</div>
        <h3 class="text-xl font-bold mt-2 group-hover:text-blue-700 transition-colors duration-150">
            {{ $job->title }}
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->type }} - {{ $job->salary }}</p>
    </div>
    <div class="flex flex-col justify-between items-end">
        <div class="space-x-1.5">
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
        <x-url-button :url="$job->url" target="_blank">Apply</x-url-button>
    </div>
</x-job-card-container>
