<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller
{
    public function index()
    {
        return Director::with('directormovie')->get();
    }
    public function show($id)
    {
        $dir = Director::with('directormovie')
        ->where('dir_id', $id)
        ->firstOrFail();
        return response()->json($dir);
    }
}
