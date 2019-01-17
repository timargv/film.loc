<?php

namespace App\Entity\Film;

use Illuminate\Database\Eloquent\Model;

use Siqwell\Kinopoisk;

class Film extends Model
{

    protected $table = 'films';

    protected $fillable = [
        'kp_id',
        'type',
        'title',
        'original',
        'tagline',
        'budget',
        'premiere',
        'age_limit',
        'mpaa',
        'company',
        'rating',
        'kp_rating',
        'imdb_rating',
        'runtime',
        'poster',
        'sh_description',
        'description',
        'trailer_youtube',
        'film_video',
        'slug',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    protected $dates = ['premiere', 'created_at', 'updated_at'];


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        Film::deleted(function ($film) {
            $film->genres()->detach();
            $film->casts()->detach();
            $film->directors()->detach();
            $film->scriptwriters()->detach();
            $film->producers()->detach();
            $film->operators()->detach();
            $film->composers()->detach();
            $film->painters()->detach();
            $film->years()->detach();
            $film->editors()->detach();

//            $film->removePoster();
        });
    }


    // Все Картинки
    public function images()
    {
        return $this->hasMany(Media::class);
    }

    // Какого года фильм
    public function years() {
        return $this->belongsToMany(Year::class,'film_years','film_id','year_id');
    }

    // Жанры фильма
    public function genres() {
        return $this->belongsToMany(Genre::class,'film_genres','film_id','genre_id');
    }


    //========================================

    // Все Персоны
    public function casts() {
        return $this->belongsToMany(Person::class,'film_casts','film_id','person_id');
    }

    //---
    public function directors() {
        return $this->belongsToMany(Person::class,'film_directors','film_id','person_id');
    }

    //---
    public function scriptwriters() {
        return $this->belongsToMany(Person::class,'film_scriptwriters','film_id','person_id');
    }

    //---
    public function producers() {
        return $this->belongsToMany(Person::class,'film_producers','film_id','person_id');
    }

    //---
    public function operators() {
        return $this->belongsToMany(Person::class,'film_operators','film_id','person_id');
    }

    //---
    public function composers() {
        return $this->belongsToMany(Person::class,'film_composers','film_id','person_id');
    }

    //---
    public function painters() {
        return $this->belongsToMany(Person::class,'film_painters','film_id','person_id');
    }

    //---
    public function editors() {
        return $this->belongsToMany(Person::class,'film_painters','film_id','person_id');
    }


    //========================================


    //------------------- Массовое добавление полей
    public static function add($fields)
    {
        $film = new static;
        $film->fill($fields);
        $film->save();
        return $film;
    }


    //------------------- Добавление в Промежуточную таблицу
    public function setYears($ids)
    {
        if ($ids === null) { return; }
        $this->years()->sync($ids);
    }

}
