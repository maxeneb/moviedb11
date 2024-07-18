<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        return Actor::with('actormovie')->get();
    }
    public function show($id)
    {
        $act = Actor::with('actormovie')
        ->where('act_id', $id)
        ->firstOrFail();
        return response()->json($act);
    }
}
