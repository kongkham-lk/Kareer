@props(['job', 'employer'])
@php
    $employer = $job->employer;
@endphp

<a href="/jobs/{{ $job->id }}">
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
        <div class="flex flex-col justify-between items-end justify-star">
            <x-employer-logo :size="48" :$employer/>
            <div class="text-sm text-gray-400 text-end">{{ $job->created_at->diffForHumans() }}</div>
        </div>
    </x-job-card-container>
</a>
