@extends('dashboard.dashboard')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Event ID: {{$event->id}}</h1>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
            <p class="text-gray-600 mb-2">{{ $event->date }} at {{ $event->time }}</p>
            <p class="text-gray-600 mb-2 font-semibold">{{ $event->location }}</p>
            <p class="text-gray-600">{{ $event->description }}</p>
        </div>
        @foreach ($comments as $comment)
            <div class="bg-gray-100 p-2 mb-2">
                <p>{{ $comment->content }}</p>
                <p class="text-gray-600">By: {{ $comment->user->name }}</p>
                @if ($comment->user_id == auth()->user()->id)
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                @endif
            </div>
        @endforeach

    <form action="{{ route('comments.store', $event->id) }}" method="POST">
        @csrf
        <textarea name="content" placeholder="Add your comment" rows="4"></textarea>
        <button
        class="px-3 py-1 text-sm text-white bg-blue-500 rounded-full hover:bg-blue-600"
        type="submit">Submit Comment</button>
    </form>

  @endsection
