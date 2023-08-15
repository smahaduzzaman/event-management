@extends('dashboard.dashboard')

@section('content')
    <h3 class="text-2xl font-semibold mb-4">Add Event</h3>
    <form action="{{ route('events.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="title" class="block font-medium">Event Name</label>
            <input type="text" id="title" name="title"
                class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300">
        </div>
        <?php $categories = App\Models\Category::all(); ?>
        <div class="mb-4">
            <label for="category_id" class="block font-medium">Event Category</label>
            <select name="category_id" id="category_id"
                class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div class="mb-4">
                <label for="date" class="block font-medium">Event Date</label>
                <input type="date" id="date" name="date"
                    class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="time" class="block font-medium">Event Time</label>
                <input type="time" id="time" name="time"
                    class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="location" class="block font-medium">Event Location</label>
                <input type="text" id="location" name="location"
                    class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="description" class="block font-medium">Event Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-300"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add Event</button>
    </form>
@endsection
