<?php

namespace App\Entity\Film;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $table = 'images_films';
    protected $fillable = ['image', 'film_id'];


    public function film() {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }
}
