<?php

namespace App\Service;

use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GenreService
{
    public function find($id){
        try{
            $genre = Genre::find($id);

            return $genre;
        }catch(\Exception $e){
            abort(500);
        }
    }

    public function store($data){
        try{
            DB::beginTransaction();

            $genre = Genre::firstOrCreate($data);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data,Genre $genre){
        try {
            DB::beginTransaction();

            $genre->update($data);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            abort(500);
        }

        return $genre;
    }
}
