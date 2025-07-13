<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>This job pays {{$job->salary}} per year.</p>

    @can('edit', $job)
        <p class="mt-4">
            <x-forms.button-submit href="/jobs/{{ $job->id }}/edit">Edit Job</x-forms.button-submit>
        </p>
    @endcan
</x-layout>
