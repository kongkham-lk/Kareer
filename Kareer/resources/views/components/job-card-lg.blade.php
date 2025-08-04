@props(['job', 'employer'])
@php
    $employer = $job->employer;
@endphp

<a href="/jobs/{{ $job->id }}">
    <x-job-card-container>
        <div>
            <x-employer-logo :size="100" :$employer/>
        </div>
        <div class="flex flex-col flex-1 space-y-3">
            <div class="text-sm text-gray-400">{{ $employer->name }}</div>
            <h3 class="text-xl font-bold transition-colors duration-150">
                {{ $job->title }}
            </h3>
            <div class="text-sm text-gray-400 mt-auto">
                <p class="">{{ $job->type }} - {{ $job->salary }}</p>
                <div class="">{{ $job->created_at->diffForHumans() }}</div>
            </div>
        </div>
        <div class="flex flex-wrap items-start justify-end gap-3 flex-[1.5]">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
    </x-job-card-container>
</a>
