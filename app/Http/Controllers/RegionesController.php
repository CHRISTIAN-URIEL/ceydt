<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionesController extends Controller
{
    public function Cholula()
    {
        return view('regiones.RegCholula');
    }
}
