<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Galeri;
use App\Models\Album;
use App\Models\Acara;

class BerandaController extends Controller
{
    public function index()
    {
        $albums = Album::with(['galeri'])->get();
        $programs = Program::all();
        $acaras = Acara::all();

        // dd($albums);

        return view('pages.home', [
            'albums' => $albums,
            'programs' => $programs,
            'acaras' => $acaras,
        ]);
    }

    public function foto(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $items = Galeri::with('album')->where('albums_id', $id)->get();

        return view('pages.galeri', compact('album', 'items'));
    }
}
