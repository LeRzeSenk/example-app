<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    const STATUS = [
        0 => 'Не опубликован',
        1 => 'Опубликован',
    ];

    protected $fillable = [
        'name',
        'status',
        'poster_url',
    ];


    public function genres(){
        return $this->belongsToMany(Genre::class,'film_genres','film_id','genre_id');
    }

    public function  timeCarbon($format){
        return Carbon::parse($this->created_at)->format($format);
    }

    public function filmStatus(){
        $status = self::STATUS[$this->status];
        return $status;
    }

    public function statusList(){
        return self::STATUS;
    }

    public function poster(){
        if (empty($this->poster_url)) {
            return 'storage/default.jpg';
        } else {
            return 'storage/'.$this->poster_url;
        }
    }
}
