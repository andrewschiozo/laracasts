<x-layout-auth pageTitle="Jobs">
    <x-slot:pageHeading>
        Edit Job {{  $job->title }}
    </x-slot:pageHeading>

    <!-- <form method="POST" action="/jobs/{{ $job->id }}"> -->
    <form method="POST" action="{{ route('jobs.update', $job) }}">
        @csrf
        @method('PATCH')
        <div class="space-y-6 p-6 bg-white">

            @include('jobs.partials.form-fields')

            <div class="flex items-center justify-between gap-x-6">
                <div class="dlex items-center">
                    <!-- <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button> -->
                    <x-button type="button" form="delete-form" class="text-red-500 hover:text-white hover:bg-red-500 text-sm font-bold">Delete</x-button>
                </div>

                <div class="flex items-center gap-x-6">
                    <x-button href="/jobs">Cancel</x-button>
                    <x-primary-button>Save</x-primary-button>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout-auth>
