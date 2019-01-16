<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Entity\Film\Film;
use App\Entity\Film\Person;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    public function index()
    {
        $films = Film::orderBy('title', 'desc')
            ->take(6)
            ->get();

        return view('home', compact('films'));
    }

    public function film($film)
    {
        $film = Film::where('id', $film)->with(
            'years',
            'genres',
            'images',
            'casts',
            'directors',
            'scriptwriters',
            'producers',
            'operators',
            'composers',
            'painters',
            'editors')->firstOrFail();
        return view('film.show', compact('film'));
    }

    public function person($person)
    {
        $person = Person::where('id', $person)->with(
            'careers',
            'film_casts',
            'film_directors',
            'film_scriptwriters',
            'film_producers',
            'film_operators',
            'film_composers',
            'film_painters',
            'film_editors')->firstOrFail();
        return view('person.show', compact('person'));
    }

    public function genre()
    {

    }
}