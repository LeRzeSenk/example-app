<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Models\Genre;

class GenreController extends BaseGenreController
{
    public function index()
    {
        $genres = Genre::all();

        return view('genre.index', compact('genres'));
    }

    public function  how($id){
        $genre = $this->service->find($id);
        return view('genre.show', compact('genre'));
    }

    public function create()
    {

        return view('genre.form');
    }

    public function edit($id)
    {
        $genre = $this->service->find($id);
        return view('genre.edit',compact('genre'));
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('genre.index');
    }

    public function update(UpdateRequest $request, $id){
        $data = $request->validated();
        $genre = $this->service->find($id);
        $genre = $this->service->update($data,$genre);

        return redirect()->route('genre.index');
    }

    public function delete($id){
        $genre = $this->service->find($id);
        $genre->delete();

        return redirect()->route('genre.index');
    }

    public function addFilms($id){
        $genre = $this->service->find($id);

        return view('genre.addFilms',compact('genre'));
    }

    public function showFilms($id){
        $films = $this->service->find($id)->films()->paginate(5);

        return view('genre.films',compact('films'));
    }
}
