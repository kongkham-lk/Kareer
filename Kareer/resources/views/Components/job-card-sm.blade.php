@props(['job'])

<x-job-card-container class="flex-col">
    <div class="text-sm text-gray-400">{{ $job->employer->name }}</div>
    <div>
        <h3 class="group-hover:text-blue-700 font-bold transition-colors duration-150">{{ $job->title }}</h3>
        <p class="text-sm mt-2 text-gray-400">{{ $job->type }} - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1.5">
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
        <x-employer-logo :size="42" :$job />
    </div>
</x-job-card-container>
