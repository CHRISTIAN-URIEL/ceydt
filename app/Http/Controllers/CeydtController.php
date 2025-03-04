<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeydtController extends Controller
{
    public function index()
    {
        return view('ceydt.index');
    }
}
