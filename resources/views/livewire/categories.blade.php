<div class="p-4 bg-gray-100">
    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <!-- Form -->
    <form wire:submit.prevent="save" class="mb-4">
        <div class="mb-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" wire:model="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>

            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700">Estado</label>
            <div class="mt-2 space-x-4">
                <label>
                    <input type="radio" wire:model="condition" value="1" class="text-blue-500">
                    Active
                </label>
                <label>
                    <input type="radio" wire:model="condition" value="0" class="text-blue-500">
                    Inactive
                </label>
            </div>

            @error('condition')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4 flex space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Save
            </button>
            <button type="button" wire:click="resetForm" class="bg-gray-500 text-white px-4 py-2 rounded">
                Cancel
            </button>
        </div>
    </form>

    <!-- Categories Table -->
    <table class="table-auto w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                    <td class="border px-4 py-2">{{ $category->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
