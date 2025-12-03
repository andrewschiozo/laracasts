<x-layout pageTitle="Jobs">
    <x-slot:pageHeading>
        Job
    </x-slot:pageHeading>

    <div class="space-y-6 px-4 py-6 bg-white">
        <h1 class="font-bold text-lg text-center">{{ $job->title }}</h1>

        <p>This job pays {{ $job->salary }}</p>


        <p class="mt-4 pt-4 border-t">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    </div>
</x-layout>
