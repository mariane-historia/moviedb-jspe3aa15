<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function show($id)
{
    $director = Director::with('movies')->findOrFail($id);
    return response()->json($director);
}
}
