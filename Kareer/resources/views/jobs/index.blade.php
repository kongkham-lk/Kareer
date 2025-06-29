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
            <div class="grid lg:grid-cols-3 gap-4">
                @foreach($featuredJobs as $job)
                    <x-job-card-sm :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading class="bg-white">Tags</x-section-heading>
            <div class="flex flex-wrap gap-3 mt-4">
                @foreach($tags as $tag)
                    <x-tag size="lg" :tag="$tag" /> {{-- can be :tag="$tag" || :$tag --}}
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading class="bg-white">Recent Jobs</x-section-heading>
            <div class="mt-3 space-y-3">
                @foreach($jobs as $job)
                    <x-job-card-lg :$job />
                @endforeach
            </div>
        </section>

    </div>
</x-layout>
