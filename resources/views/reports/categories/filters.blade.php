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

    </form>
</div>
@endsection
