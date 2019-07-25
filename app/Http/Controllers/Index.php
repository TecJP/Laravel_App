<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function mostrar()
    {
        return view('aplication.index');
    }
}
