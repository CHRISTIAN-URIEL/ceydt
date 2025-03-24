<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionesController extends Controller
{
    public function Cholula()
    {
        return view('regiones.RegCholula');
    }

    public function Zacatlan()
    {
        return view('regiones.RegZacatlan');
    }
    
    public function Atlixco()
    {
        return view('regiones.RegAtlixco');
    }
}
