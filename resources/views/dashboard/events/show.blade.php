@extends('dashboard.dashboard')

@section('title', 'Events')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Event ID: {{$event->id}}</h1>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
            <p class="text-gray-600 mb-2">{{ $event->date }} at {{ $event->time }}</p>
            <p class="text-gray-600 mb-2 font-semibold">{{ $event->location }}</p>
            <p class="text-gray-600">{{ $event->description }}</p>
        </div>
        <form action="" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <div class="mb-4">
                <label for="comment" class="block font-medium">Leave a Reply</label>
                <textarea id="comment" name="comment" rows="4"
                    class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Send Reply</button>
        </form>

    </div>
@endsection
