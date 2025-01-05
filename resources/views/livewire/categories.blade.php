<div class="p-4 bg-gray-100">
    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <!-- Formulario -->
    <form wire:submit.prevent="save" class="mb-4">
        <div class="mb-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea id="description" wire:model="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>

            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </form>
</div>
