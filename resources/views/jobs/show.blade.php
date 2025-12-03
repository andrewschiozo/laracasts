<x-layout pageTitle="Jobs">
    <x-slot:pageHeading>
        Job
    </x-slot:pageHeading>

    <h1 class="font-bold text-lg">{{ $job->title }}</h1>

    <p>
        This job pays {{ $job->salary }}
    </p>

    <p class="mt-4">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
