<?php

namespace App\Entity\Film;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //

    protected $table = 'careers';
    protected $fillable = ['name'];

    //-------------------
    public function persons () {
        return $this->belongsToMany(Person::class,'person_careers','career_id','person_id');
    }
}
