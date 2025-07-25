@props(['featuredJobs', 'jobs', 'tags'])

<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="mx-auto text-4xl font-bold">Let's Find You A Great Job</h1>
            <x-forms.form method="GET" action="/search" class="mt-4">
                <x-forms.input :label="false" name="q" placeholder="Web developer..."></x-forms.input>
            </x-forms.form>
        </section>
        <section>
            <x-section-heading class="bg-white">Feature Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-4.5 mt-4">
                @foreach($featuredJobs as $job)
                    <x-job-card-sm :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading class="bg-white">Tags</x-section-heading>
            <div class="flex flex-wrap gap-2.5 mt-4">
                @foreach($tags as $tag)
                    <x-tag size="lg" :tag="$tag" :attachUrl="true" /> {{-- can be :tag="$tag" || :$tag --}}
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading class="bg-white">Recent Jobs</x-section-heading>
            <div class="flex flex-col mt-4.5 gap-5">
                @foreach($jobs as $job)
                    <x-job-card-lg :$job />
                @endforeach
            </div>
            <div class="mt-4">
                {{-- Pagination footer --}}
                {{ $jobs->links('vendor.pagination.tailwind') }}
            </div>
        </section>

    </div>
</x-layout>
