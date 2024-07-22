<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job->title}}</h2>

    <p>
        This Job pays {{$job->salary}}
    </p>
    <p mt-6>
        <x-button href="/jobs/{{ $job->id }}/edit">
            Edit Job

        </x-button>
    </p>
</x-layout>