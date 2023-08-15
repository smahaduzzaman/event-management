@extends('dashboard.dashboard')
@section('content')
    <h1 class="text-2xl font-semibold mb-4">Comments</h1>
    <form action="{{ route('comments.index') }}" method="get">
        <input type="text" name="search" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>

    @foreach ($comments as $comment)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">{{ $comment->name }}</h2>
            <div class="mt-4 flex justify-between">
                <a href="{{ route('comments.show', $comment->id) }}" class="text-blue-500 hover:underline">View
                    Details</a>
                <div class="space-x-2">
                    <a href="{{ route('comments.edit', $comment->id) }}"
                        class="px-3 py-1 text-sm text-white bg-blue-500 rounded-full hover:bg-blue-600">Edit</a>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-1 text-sm text-white bg-red-500 rounded-full hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{ $comments->links() }}

    </div>
@endsection
