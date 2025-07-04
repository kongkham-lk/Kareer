@props(['job', 'employer'])
@php
    $employer = $job->employer;
@endphp

<a href="{{ $job->url }}" target="_blank">
    <x-job-card-container class="justify-between" :$job>
        <div class="flex flex-col space-y-3">
            <div class="text-sm text-gray-400">{{ $employer->name }}</div>
            <h3 class="font-bold transition-colors duration-150">
                {{ $job->title }}
            </h3>
            <div class="mt-auto">
                <p class="text-sm text-gray-400">{{ $job->type }} - {{ $job->salary }}</p>
                <div class="flex flex-wrap gap-2 mt-1.5">
                    @foreach($job->tags as $tag)
                        <x-tag :$tag />
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between items-end">
            <x-employer-logo :size="42" :$employer/>
        </div>
    </x-job-card-container>
</a>
