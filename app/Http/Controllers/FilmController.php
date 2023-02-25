<?php

namespace App\Http\Controllers;

use App\Http\Requests\Film\StoreRequest;
use App\Http\Requests\Film\UpdateRequest;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class FilmController extends BaseFilmController
{
    public function index()
    {
        $films = Film::where('status',0)->paginate(5);
        $film_status = 0;
        return view('films.index', compact(['films','film_status']));
    }
    public function publishedIndex()
    {
        $films = Film::where('status',1)->paginate(5);
        $film_status = 1;
        return view('films.index', compact(['films','film_status']));
    }

    public function  show($id){
        $film = $this->service->find($id);
        return view('films.show', compact('film'));
    }

    public function create (){
        $genres = Genre::get();
        return view('films.form',compact('genres'));
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('film.index');
    }

    public function edit ($id){
        $film = $this->service->find($id);
        $genres = Genre::get();
        return view('films.edit',compact('film','genres'));
    }

    public function update(UpdateRequest $request, $id){
        $data = $request->validated();
        $film = $this->service->find($id);
        $film = $this->service->update($data,$film);

        return redirect()->route('film.index');
    }

    public function delete($id){
        $film = $this->service->find($id);
        $film->genres()->detach();
        $film->delete();

        return redirect()->route('film.index');
    }
}
