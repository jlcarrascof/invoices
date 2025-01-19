@extends('welcome')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Category</h1>

    <!-- Show validation error messages -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $category->name) }}">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $category->description) }}</textarea>
        </div>

    </form>

</div>

@endsection
