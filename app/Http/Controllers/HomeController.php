<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Album;

class HomeController extends Controller
{
    public function index()
    {
        $albums = Album::with(['galeri'])->get();

        return view('layouts.frontend.home', compact('albums'));
    }

    public function foto(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $items = Galeri::with('album')->where('albums_id', $id)->get();

        return view('layouts.frontend.detail', compact('album', 'items'));
    }
}
