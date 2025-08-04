<x-layout>
    <x-slot:heading>
        Edit Job, ID: {{ $job->id }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf {{-- token for Cross Site Request Forgery Protection --}}
        @method('PATCH') {{-- replace POST request as PATCH request instead --}}

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="title" class="block text-sm/6 font-medium text-gray-900">Job Title</label>
                  <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                      <input
                        type="text"
                        name="title"
                        id="title"
                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        placeholder="Programmer"
                        value="{{ $job->title }}"
                        required>
                    </div>
                  </div>
                  <div>
                    @error('title')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="sm:col-span-4">
                  <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                  <div class="mt-1">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                      <input
                        type="text"
                        name="salary"
                        id="salary"
                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        placeholder="$50,000 Per Year"
                        value="{{ $job->salary }}"
                        required>
                    </div>
                  </div>
                  <div>
                    @error('salary')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <x-btn-delete form="delete-form">Delete</x-btn-delete>
            </div>
            <div class="flex items-center gap-x-6">
                <x-btn-cancel href="/jobs/{{ $job->id }}">Cancel</x-btn-cancel>
                <div>
                    <x-btn-submit>Update</x-btn-submit>
                </div>
            </div>
        </div>
      </form>

      <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
        @csrf
        @method("DELETE")
      </form>

</x-layout>
