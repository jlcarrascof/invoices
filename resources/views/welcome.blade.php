<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing and Inventory System</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" defer></script>
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
                    <i class="fas fa-home w-5 h-5 mr-2"></i>
                    Home
                </a>

                <!-- Categories with Submenu -->
                <div>
                    <button @click="openMenu = (openMenu === 'categories' ? null : 'categories')" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-700">
                        <span class="flex items-center">
                            <i class="fas fa-boxes w-5 h-5 mr-2"></i>
                            Categories
                        </span>
                        <i class="fas fa-chevron-down w-4 h-4 transition-transform" :class="{ 'rotate-180': openMenu === 'categories' }"></i>
                    </button>
                    <div x-show="openMenu === 'categories'" x-collapse class="ml-6 mt-1">
                        <a href="{{ route('categories.create') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📂 Data Management</a>
                        <a href="{{ route('reports.categories') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📊 Reports</a>
                    </div>
                </div>

                <!-- Suppliers with Submenu -->
                <div>
                    <button @click="openMenu = (openMenu === 'suppliers' ? null : 'suppliers')" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-700">
                        <span class="flex items-center">
                            <i class="fas fa-truck w-5 h-5 mr-2"></i>
                            Suppliers
                        </span>
                        <i class="fas fa-chevron-down w-4 h-4 transition-transform" :class="{ 'rotate-180': openMenu === 'suppliers' }"></i>
                    </button>
                    <div x-show="openMenu === 'suppliers'" x-collapse class="ml-6 mt-1">
                        <a href="{{ route('suppliers.create') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📂 Data Management</a>
                        <a href="" class="block py-2 px-3 rounded hover:bg-gray-600">📊 Reports</a>
                    </div>
                </div>

                <!-- Customers with Submenu -->
                <div>
                    <button @click="openMenu = (openMenu === 'customers' ? null : 'customers')" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-700">
                        <span class="flex items-center">
                            <i class="fas fa-users w-5 h-5 mr-2"></i>
                            Customers
                        </span>
                        <i class="fas fa-chevron-down w-4 h-4 transition-transform" :class="{ 'rotate-180': openMenu === 'customers' }"></i>
                    </button>
                    <div x-show="openMenu === 'customers'" x-collapse class="ml-6 mt-1">
                        <a href="{{ route('customers.create') }}" class="block py-2 px-3 rounded hover:bg-gray-600">📂 Data Management</a>
                        <a href="" class="block py-2 px-3 rounded hover:bg-gray-600">📊 Reports</a>
                    </div>
                </div>
                <a href="" class="flex items-center py-2 px-3 rounded hover:bg-gray-700">
                    <i class="fas fa-cube w-5 h-5 mr-2"></i>
                    Products
                </a>
                <a href="" class="flex items-center py-2 px-3 rounded hover:bg-gray-700">
                    <i class="fas fa-shopping-cart w-5 h-5 mr-2"></i>
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
