<?php

namespace App\Http\Controllers\api;
use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // return Movie::all();
        return Movie::with('actormovie', 'directormovie', 'genremovie', 'ratings')->get();
    }

    public function show($id)
    {
        $movie = Movie::with('actormovie', 'directormovie', 'genremovie', 'ratings')
        ->where('mov_id', $id)
        ->firstOrFail();
        return response()->json($movie);
    }
}
