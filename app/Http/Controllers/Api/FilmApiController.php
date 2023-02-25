<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmApiController extends Controller
{
    public function index(){
        $films = Film::paginate(5);
        $films = FilmResource::collection($films);
        return response()->json($films,200);
    }

    public function show($genre_id){
        $film = Film::find($genre_id);
        return response()->json($film,200);
    }
}
