<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="bg-blue-800 text-white w-1/4 py-6 px-4">
        <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
        <ul class="space-y-4">
            <li>
                <a href="{{ route('dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Home</a>
            </li>
            <li>
                <a href="{{ route('events.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Events</a>
            </li>
            <li>
                <a href="{{ route('events.create') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Create Event</a>
            </li>


        </ul>
    </div>

    <!-- Main Content -->
    <div class="w-3/4 p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
