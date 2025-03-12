@extends('welcome')


@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Generar Reporte de Categorías</h1>

    <form action="{{ route('categories.report.view') }}" method="GET" class="space-y-4">
        @csrf

        <!-- Tipo de Reporte -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Tipo de Reporte</label>
            <select name="report_type" id="report_type" class="w-full px-4 py-2 border rounded" x-data="{ rangeEnabled: false }" @change="rangeEnabled = ($event.target.value === 'range')">
                <option value="all">Todas las Categorías</option>
                <option value="range">Por Rango de ID</option>
            </select>
        </div>

        <!-- Rango de ID (oculto por defecto) -->
        <div x-show="rangeEnabled" class="grid grid-cols-2 gap-4">
            <div>
                <label for="from_id" class="block text-sm font-medium text-gray-700">Desde ID</label>
                <input type="number" name="from_id" id="from_id" class="w-full px-4 py-2 border rounded">
            </div>
            <div>
                <label for="to_id" class="block text-sm font-medium text-gray-700">Hasta ID</label>
                <input type="number" name="to_id" id="to_id" class="w-full px-4 py-2 border rounded">
            </div>
        </div>

    </form>
</div>
@endsection
