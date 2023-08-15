@extends('dashboard.dashboard')

@section('title', 'Events')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Events</h1>
    <form action="{{ route('events.index') }}" method="get">
        <input type="text" name="search" placeholder="Search by title">
        <select name="category">
            <option value="">All Categories</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <select name="sort">
            <option value="asc">Sort by Date (Ascending)</option>
            <option value="desc">Sort by Date (Descending)</option>
        </select>
        <button type="submit">Search</button>
    </form>

    @foreach ($events as $event)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
            <p class="text-gray-600">{{ $event->date }} at {{ $event->time }}</p>
            <div class="flex items-center justify-between pt-4 text-smtext-gray-600">
                <p class="text-gray-600">{{ $event->location }}</p>
                <p class="text-gray-600">{{ $event->category->name }}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:underline">View Details</a>
                <div class="space-x-2">
                    <a href="{{ route('events.edit', $event->id) }}"
                        class="px-3 py-1 text-sm text-white bg-blue-500 rounded-full hover:bg-blue-600">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-1 text-sm text-white bg-red-500 rounded-full hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{ $events->links() }}

    </div>
@endsection
