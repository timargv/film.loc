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







    //-------------------------------------
    public static function getFilm($id)
    {
        $Kinopoisk = new Kinopoisk\Client();
        $kp = $Kinopoisk->getFilmApi();
        $film = $kp->details($id);



        return $film;
    }
    public static function getFilmSearch($title)
    {
        $Kinopoisk = new Kinopoisk\Client();
        $kp = $Kinopoisk->getSearchApi();
        $film = $kp->searchFilm($title);
        return $film;
    }

    public static function getFilmGenres()
    {
        $Kinopoisk = new Kinopoisk\Client();
        $kp = $Kinopoisk->getMetaApi();
        $film = $kp->genres();

        return $film;
    }



    public static function getKpReatingFile($film_kp_id)
    {
        $rating = file_get_contents('https://rating.kinopoisk.ru/'.$film_kp_id.'.xml');
        $data = utf8_decode(mb_convert_encoding($rating, "windows-1251", "utf-8"));
        libxml_use_internal_errors(true);
//        $html_utf8 = mb_convert_encoding($rating, "utf-8", "windows-1251");
//        $html_utf8 = str_replace(array("\r\n", "\n"), null, $data);
//        dd($html_utf8);
//        $fileContents = str_replace(array("\n", "\r", "\t"), '', $rating);
        $fileContents = trim(str_replace('"', "'", $rating));


        $xml = simplexml_load_string($data);
        $json = json_encode($xml);
        $data = json_decode($json,TRUE);
        return $data;
    }

}
