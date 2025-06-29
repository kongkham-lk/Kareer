<x-layout>
    <x-page-header>Results</x-page-header>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-lg :$job />
        @endforeach
    </div>
</x-layout>
