<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryReportController extends Controller
{
    public function index()
    {
        // return view('reports.categories.filters');
        // return view('welcome');
        // return 'Hello world';
        // dd('Llegó al controlador'); // ¿Se muestra esto al acceder a /categories/reports?
        return view('categories.reports_new');

        /*
        if (view()->exists('categories.reports')) {
            return view('categories.reports');
        }
        abort(500, 'La vista no existe. Ruta correcta?');
        */
    }
}
