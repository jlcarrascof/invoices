<div class="p-4 bg-gray-100">
    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif
</div>
