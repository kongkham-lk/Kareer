@props(['job'])

<x-job-card-container>
    <div>
        <x-employer-logo size="{{ 100 }}"/>
    </div>
    <div class="flex flex-col flex-1">
        <div class="text-sm text-gray-400">Laracast</div>
        <h3 class="text-xl font-bold mt-2 group-hover:text-blue-700 transition-colors duration-150">Video Producer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full time - $50,000</p>
    </div>
    <div class="space-x-1.5">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-job-card-container>
