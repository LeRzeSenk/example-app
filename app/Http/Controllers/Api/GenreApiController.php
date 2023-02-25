<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GenreResource;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreApiController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response()->json(GenreResource::collection($genres),200);
    }

    public function films($genre_id){
        $genre = Genre::find($genre_id);
        $films = $genre->films()->paginate(5);
        return response()->json($films,200);
    }
}
