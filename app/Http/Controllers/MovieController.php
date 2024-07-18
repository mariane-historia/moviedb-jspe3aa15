<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    
public function index()
{
    $movies = Movie::with(['director', 'actors', 'genres', 'ratings.user'])->get();
    return response()->json($movies);
}

public function show($id)
{
    $movie = Movie::with(['director', 'actors', 'genres', 'ratings.user'])->findOrFail($id);
    return response()->json($movie);
}
}
