<?php

namespace App\Entity\Film;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $table = 'genres';
    protected $fillable = ['name'];

    //-------------------
    public function films () {
        return $this->belongsToMany(Film::class,'film_genres','genre_id','film_id');
    }
}
