<x-layout pageTitle="Jobs">
    <x-slot:pageHeading>
        Create Job
    </x-slot:pageHeading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-6 p-6 bg-white">

            @include('jobs.partials.form-fields')

            <div class=" flex items-center justify-end gap-x-6">
                <x-button href="/jobs">Cancel</x-button>
                <x-primary-button>Save</x-primary-button>
            </div>
        </div>
    </form>
</x-layout>
