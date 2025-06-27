<x-layout>
    <div class="space-y-10">
        <section class="text-center py-8">
            <h1 class="mx-auto text-4xl font-bold">Let's Find You A Great Job</h1>
            <form class="w-full justify-items-center" action="">
                <input type="text"
                       placeholder="I am looking for..."
                       class="block rounded-2xl bg-white/5 border border-white/10 py-3 px-4 mt-5 w-full max-w-2xl placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
            </form>
        </section>
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
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
                <x-tag href="/" size="lg">tags</x-tag>
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
