<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class DetailController extends Controller
{
    public function detail(Request $request, $slug)
    {
        $item = Program::where('slug', $slug)->first();

        return view('pages.detail', compact('item'));
    }
}
