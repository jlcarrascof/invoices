<div class="p-4 bg-white rounded shadow">

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
    </form>
</div>
