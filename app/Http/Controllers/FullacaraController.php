<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;

class FullacaraController extends Controller
{
    public function index()
    {
        $acaras = Acara::all();

        return view('pages.fullAcara', compact('acaras'));
    }
}
