<x-layout pageTitle="Jobs">
    <x-slot:pageHeading>Job List</x-slot:pageHeading>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}" class="text-blue-500 hover:underline"><strong>{{$job['title'] }}</strong>: {{ $job['salary'] }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>