<x-app-layout>
    <x-slot name="title">
        Tracks
    </x-slot>

    <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
        <div class="p-6">
            <div class="flex flex-row items-center justify-between mb-2">
                <h1 class="text-3xl font-poppins">Tracks</h1>
                <x-button-link :href="route('admin.track.create')" class="ml-4">
                    {{ 'Create' }}
                </x-button-link>
            </div>
            @foreach ($tracks as $track)
                <div class="flex flex-row py-4 justify-between">
                    <div>
                        <p>{{ $track->disc->album->albumlisting->artist }} -
                            {{ $track->disc->album->albumlisting->name }}
                            ({{ $track->disc->album->format }}) - {{ $track->disc->name }} -> {{ $track->name }}
                            ({{ $track->length }})</p>
                    </div>
                    <div class="ml-4">
                        <x-button-link :href="route('admin.track') . '/' . $track->id . '/edit'">
                            {{ 'Edit' }}
                        </x-button-link>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-app-layout>
