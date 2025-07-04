@props(['job', 'employer'])
@php
    $employer = $job->employer;
@endphp

<x-job-card-container class="justify-between">
    <div class="flex-col">
        <div class="text-sm text-gray-400">{{ $employer->name }}</div>
        <div>
            <h3 class="group-hover:text-blue-700 font-bold transition-colors duration-150">
                <a href="{{ $job->url }}" target="_blank">
                    {{ $job->title }}
                </a>
            </h3>
            <p class="text-sm mt-2 text-gray-400">{{ $job->type }} - {{ $job->salary }}</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div class="space-x-1.5">
                @foreach($job->tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-between items-end">
        <x-employer-logo :size="42" :$employer/>
        <x-url-button class="text-2xs" :url="$job->url" target="_blank">Apply</x-url-button>
    </div>
</x-job-card-container>
