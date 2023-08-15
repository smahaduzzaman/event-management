@extends('dashboard.dashboard')

@section('title', 'Events')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Events</h1>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($events as $event)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
                <p class="text-gray-600">{{ $event->date }} at {{ $event->time }}</p>
                <p class="text-gray-600">{{ $event->location }}</p>

                <div class="mt-4 flex justify-between">
                    <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:underline">View Details</a>
                    <div class="space-x-2">
                        <a href="{{ route('events.edit', $event->id) }}" class="px-3 py-1 text-sm text-white bg-blue-500 rounded-full hover:bg-blue-600">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 text-sm text-white bg-red-500 rounded-full hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
