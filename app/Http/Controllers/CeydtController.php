<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeydtController extends Controller
{
    public function index()
    {
        //dd('Llegaste al controlador CeydtController'); // Esto detendrá la ejecución y mostrará el mensaje
        return view('ceydt.index');
    }

    public function ecommerce()
    {
        return view('ceydt.ecommerce');
    }
}
