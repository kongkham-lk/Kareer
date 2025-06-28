@props(['jobs', 'tags'])

<x-layout>
    <div class="space-y-10">
        <section class="text-center py-8">
            <h1 class="mx-auto text-4xl font-bold">Let's Find You A Great Job</h1>
            <form class="w-full justify-items-center" action="">
                <input type="text"
                       placeholder="I am looking for..."
                       class="block rounded-2xl bg-white/5 border border-white/10 py-3 px-4 mt-5 w-full max-w-2xl placeholder:text-gray-400 focus:outline-none">
            </form>
        </section>
        <section>
            <x-section-heading class="bg-white">Feature Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-4">
                @foreach($jobs as $job)
                    @if($job->featured)
                        <x-job-card-sm :$job />
                    @endif
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
