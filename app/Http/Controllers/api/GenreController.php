<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::with('genremovie')->get();
    }
    public function show($id)
    {
        $gen = Genre::with('genremovie')
        ->where('gen_id', $id)
        ->firstOrFail();
        return response()->json($gen);
    }
}
