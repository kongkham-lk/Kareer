<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading class="bg-white">Tops Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-4">
                <x-job-card-sm></x-job-card-sm>
                <x-job-card-sm></x-job-card-sm>
                <x-job-card-sm></x-job-card-sm>
            </div>
        </section>
        <section>
            <x-section-heading class="bg-white">Tags</x-section-heading>
            <div class="flex flex-wrap gap-3 mt-4">
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
                <x-tag-lg href="/">tags</x-tag-lg>
            </div>
        </section>
        <section>
            <x-section-heading class="bg-white">Job Listings</x-section-heading>
            <div class="mt-3 space-y-3">
                <x-job-card-lg/>
                <x-job-card-lg/>
                <x-job-card-lg/>
                <x-job-card-lg/>
            </div>
        </section>

    </div>
</x-layout>
