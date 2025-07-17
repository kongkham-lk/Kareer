@props(['job'])
@php
    $employer = $job->employer;
@endphp

<x-layout>
    <x-job-card-container class="justify-between p-10" :hover="false">
        <div class="flex flex-col space-y-3">
            <div class="flex items-center space-x-2 font-bold">
                <x-employer-logo class="rounded-md" :size="36" :$employer/>
                <div class="text-md font-medium text-gray-400">{{ $employer->name }}</div>
            </div>
            <h1 class="font-bold text-3xl">
                {{ $job->title }}
            </h1>
            <div class="mt-auto">
                <p class="text-sm text-gray-400">{{ $job->type }} - {{ $job->salary }} - {{ $job->created_at->diffForHumans() }}</p>
                <div class="flex flex-wrap gap-2 mt-3">
                    @foreach($job->tags as $tag)
                        <x-tag size="lg" :tag="$tag" :attachUrl="true" />
                    @endforeach
                </div>
            </div>
        </div>
        <div class="space-x-2">
            @can('edit', $job)
                <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
            @else
                <x-button href="{{ $job->url }}" target="_blank">Applied</x-button>
            @endcan
        </div>
    </x-job-card-container>

    <x-job-card-container class="mt-5 flex flex-col p-10" :hover="false">
        <h1 class="font-bold text-2xl">About the Job</h1>
        <p>{{ $job->description }}</p>
    </x-job-card-container>

</x-layout>
