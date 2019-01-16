<?php

namespace App\Entity\Film;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //
    protected $table = 'years';
    protected $fillable = ['name'];

    //-------------------
    public function films () {
        return $this->belongsToMany(Film::class,'film_years','year_id','film_id');
    }
}
