<?php

namespace App\Entity\Film;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = 'persons';
    protected $fillable = ['name', 'name_original', 'stature', 'birthplace', 'date', 'slug'];
    protected $dates = ['created_at', 'updated_at', 'date'];


    //-------------------
    public function careers () {
        return $this->belongsToMany(Career::class,'person_careers','person_id','career_id');
    }

    // Все Персоны
    public function film_casts() {
        return $this->belongsToMany(Film::class,'film_casts', 'person_id', 'film_id');
    }

    //---
    public function film_directors() {
        return $this->belongsToMany(Film::class,'film_directors', 'person_id', 'film_id');
    }

    //---
    public function film_scriptwriters() {
        return $this->belongsToMany(Film::class,'film_scriptwriters', 'person_id', 'film_id');
    }

    //---
    public function film_producers() {
        return $this->belongsToMany(Film::class,'film_producers', 'person_id', 'film_id');
    }

    //---
    public function film_operators() {
        return $this->belongsToMany(Film::class,'film_operators', 'person_id', 'film_id');
    }

    //---
    public function film_composers() {
        return $this->belongsToMany(Film::class,'film_composers', 'person_id', 'film_id');
    }

    //---
    public function film_painters() {
        return $this->belongsToMany(Film::class,'film_painters', 'person_id', 'film_id');
    }

    //---
    public function film_editors() {
        return $this->belongsToMany(Film::class,'film_painters', 'person_id', 'film_id');
    }


}
