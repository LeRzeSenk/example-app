<?php

namespace App\Service;

use App\Models\Film;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilmService
{
    public function find($id){
        try{
            $film = Film::find($id);

            return $film;
        }catch(\Exception $e){
            abort(500);
        }
    }

    public function store($data){
        try{
            DB::beginTransaction();

            if (isset($data['poster_url']) && !empty($data['poster_url'])){
                $data['poster_url'] = Storage::disk('public')->put('images/posters',$data['poster_url']);
            }else {
                $data['poster_url'] = 'images/poster/default.png';
            }
            if (isset($data['genre_ids'])){
                $tags_ids = $data['genre_ids'];
                unset($data['genre_ids']);
            }

            $film = Film::firstOrCreate($data);
            if (!empty($tags_ids)){
                $film->genres()->attach($tags_ids);
            }

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data,Film $film){
        try {
            DB::beginTransaction();

            if (isset($data['poster_url']) && !empty($data['poster_url'])){
                $data['poster_url'] = Storage::disk('public')->put('images/posters',$data['poster_url']);
            }
            if (isset($data['genre_ids'])){
                $tags_ids = $data['genre_ids'];
                unset($data['genre_ids']);
            }

            if (!empty($tags_ids)){
                $film->genres()->detach();
                $film->genres()->attach($tags_ids);
            }
            $film = $film->update($data);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            abort(500);
        }

        return $film;
    }
}
