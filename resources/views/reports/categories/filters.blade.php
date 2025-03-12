@extends('welcome')


@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Generar Reporte de Categorías</h1>

    <form action="{{ route('categories.report.view') }}" method="GET" class="space-y-4">
        @csrf

    </form>
</div>
@endsection
