<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show($id)
{
    $actor = Actor::with('movies')->findOrFail($id);
    return response()->json($actor);
}
}
