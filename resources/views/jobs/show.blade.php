@if(Auth::check())
<x-layout-auth pageTitle="Jobs">
    <x-slot:pageHeading>
        {{ $job->employer->name }}
    </x-slot:pageHeading>

    <div class="space-y-6 px-4 py-6 bg-white">
        <h1 class="font-bold text-lg text-center">{{ $job->title }}</h1>

        <p>This job pays {{ $job->salary }}</p>

        <p class="mt-4 pt-4 border-t">
            <x-button href="{{ route('jobs.edit', $job) }}">Edit Job</x-button>
        </p>
    </div>
</x-layout-auth>
@else
<x-layout-guest pageTitle="Jobs">
    <x-slot:pageHeading>
        {{ $job->employer->name }}
    </x-slot:pageHeading>

    <div class="space-y-6 px-4 py-6 bg-white">
        <h1 class="font-bold text-lg text-center">{{ $job->title }}</h1>

        <p>This job pays {{ $job->salary }}</p>
    </div>
</x-layout-guest>
@endif
