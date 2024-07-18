<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;


class RatingController extends Controller
{
    public function show($id)
    {
        $rat = Rating::with('reviewer')
        ->where('rev_id', $id)
        ->firstOrFail();
        return response()->json($rat);
    }
}
