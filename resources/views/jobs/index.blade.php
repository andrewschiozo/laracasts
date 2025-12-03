<x-layout pageTitle="Jobs">
    <x-slot:pageHeading>Job List</x-slot:pageHeading>

    <div class="flex justify-end m-2">
        <x-button href="/jobs/create">Create Job</x-button>
    </div>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <x-jobs.card :job="$job"/>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
