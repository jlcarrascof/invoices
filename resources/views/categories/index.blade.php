@extends('welcome')

@section('content')
<div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Categories List</h1>

    <!-- Categories Table -->
    <table class="table-auto w-full bg-gray-100 rounded">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                    <td class="border px-4 py-2">{{ $category->description }}</td>
                    <td class="border px-4 py-2">
                        {{ $category->condition ? 'Active' : 'Inactive' }}
                    </td>
                    <td class="border px-4 py-2">
                        <!-- Edit button -->
                        <a href="{{ route('categories.edit', $category) }}" class="text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4">Categories not found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Paginate -->
    <div class="mt-4">
        {{ $categories->links() }}
    </div>

    <!-- Button for return to main form -->
    <div class="mt-4">
        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Return to Form</a>
    </div>
</div>
@endsection
