<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing and Inventory System</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-500 text-white px-4 py-3 flex justify-between items-center">
        <h1 class="text-xl font-bold">Invoicing System</h1>
        <div class="text-sm">Admin User</div>
    </header>

    <div class="flex h-screen">
        <!-- Sidebar con Alpine.js -->
        <aside class="bg-gray-800 text-white w-64 p-4 space-y-4" x-data="{ openMenu: null }">
            <nav>
                <!-- Home -->
                <a href="/" class="flex items-center py-2 px-3 rounded hover:bg-gray-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9.75L12 3l9 6.75V21H3V9.75z"></path>
                    </svg>
                    Home
                </a>

                <!-- Categorías con Submenú -->
                <div>
                    <button @click="openMenu = (openMenu === 'categories' ? null : 'categories')"
                        class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-700">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 10l9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V10z"></path>
                            </svg>
                            Categories
                        </span>
                        <svg class="w-4 h-4 transition-transform"
                            :class="{ 'rotate-180': openMenu === 'categories' }"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openMenu === 'categories'" x-collapse class="ml-6 mt-1">
                        <a href="{{ route('categories.create') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📂 Mantenimiento</a>
                        <a href="{{ route('categories.report') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📊 Reportes</a>
                    </div>
                </div>

                <!-- Proveedores con Submenú -->
                <div>
                    <button @click="openMenu = (openMenu === 'suppliers' ? null : 'suppliers')"
                        class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-700">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 10l9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V10z"></path>
                            </svg>
                            Suppliers
                        </span>
                        <svg class="w-4 h-4 transition-transform"
                            :class="{ 'rotate-180': openMenu === 'suppliers' }"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24 0 0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openMenu === 'suppliers'" x-collapse class="ml-6 mt-1">
                        <a href="{{ route('suppliers.create') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📂 Mantenimiento</a>
                        <a href="" class="block py-2 px-3 rounded hover:bg-gray-600">📊 Reportes</a>
                    </div>
                </div>

                <!-- Clientes -->
                <a href="" class="flex items-center py-2 px-3 rounded hover:bg-gray-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 15a7 7 0 0 1 14 0"></path>
                        <path d="M12 4v6"></path>
                        <path d="M9 19h6"></path>
                    </svg>
                    Clients
                </a>

                <!-- Productos -->
                <a href="" class="flex items-center py-2 px-3 rounded hover:bg-gray-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12h16"></path>
                        <path d="M12 4v16"></path>
                    </svg>
                    Products
                </a>

                <!-- Ventas -->
                <a href="" class="flex items-center py-2 px-3 rounded hover:bg-gray-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12h18"></path>
                        <path d="M8 5l8 7-8 7"></path>
                    </svg>
                    Sales
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-3 text-sm">
        Copyright @ 2014-2024 Administrative Solutions, S.A. - All rights reserved.
    </footer>

</body>
</html>
