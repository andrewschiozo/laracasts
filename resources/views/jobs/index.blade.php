@if(Auth::check())
<x-layout-auth pageTitle="Jobs" pageHeading="Job List">

    <div class="flex justify-end m-2">
        <x-button href="{{ route('jobs.create') }}">Create Job</x-button>
    </div>

    <div class="space-y-4">
        @foreach($jobs as $job)
        <x-jobs.card :job="$job" />
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout-auth>
@else
<x-layout-guest pageTitle="Jobs" pageHeading="Job List">
    <div class="space-y-4">
        @foreach($jobs as $job)
        <x-jobs.card :job="$job" />
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout-guest>
@endif
