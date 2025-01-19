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

        <!-- Condition -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <div class="flex items-center space-x-4 mt-2">
                <label class="flex items-center">
                    <input type="radio" name="condition" value="1" class="text-blue-500 focus:ring-blue-400" {{ old('condition', $category->condition) == 1 ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700">Active</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="condition" value="0" class="text-blue-500 focus:ring-blue-400" {{ old('condition', $category->condition) == 0 ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700">Inactive</span>
                </label>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-end space-x-3">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
        </div>

    </form>

</div>

@endsection
