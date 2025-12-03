<x-layout pageTitle="Jobs">
    <x-slot:pageHeading>
        Edit Job {{  $job->title }}
    </x-slot:pageHeading>

    <form method="POST" action="/job/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-gray/5 pl-3 outline-1 -outline-offset-1 outline-gray/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input
                                    id="title"
                                    type="text"
                                    name="title"
                                    placeholder="Shift Leader"
                                    class="block min-w-0 grow bg-gray/5 py-1.5 px-2 text-base text-gray placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                    value="{{ $job->title }}"
                                    required />
                            </div>
                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray">Salary</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-gray/5 pl-3 outline-1 -outline-offset-1 outline-gray/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input
                                    id="salary"
                                    type="text"
                                    name="salary"
                                    placeholder="$ 50,000 Per Year"
                                    class="block min-w-0 grow bg-gray/5 py-1.5 px-2 text-base text-gray placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                    value="{{ $job->salary }}"
                                    required />
                            </div>
                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="dlex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray">Cancel</a>

                <div>
                    <button
                        type="submit"
                        class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Update
                    </button>
                </div>

            </div>
        </div>
    </form>

    <form method="POST" action="/job/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
