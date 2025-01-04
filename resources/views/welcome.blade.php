<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing and Inventory System</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->

    <header class="bg-blue-500 text-white px-4 py-3 flex justify-between items-center">
        <h1 class="text-xl font-bold">Invoicing System</h1>
        <div class="text-sm">Admin User</div>
    </header>

    <div class="flex h-screen">
        <!-- Sidebar -->

        <aside class="bg-gray-800 text-white w-64 p-4 space-y-4">
            <nav>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Home</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Users</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Categories</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Products</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Clients</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Sales</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            <h2 class="text-2xl font-semibold mb-4">
                Blank Page
            </h2>
            <p class="text-gray-600">This is the zone to create our web app</p>
            @livewire('hello-world')
            @livewire('simple-form')
            @livewire('interactive-table')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-3 text-sm">
        Copyright @ 2014-2024 Administrative Solutions, S.A. - All rights reserved.
    </footer>

    @livewireScripts
</body>
</html>
