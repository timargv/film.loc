<?php

namespace App\Http\Controllers\Admin\Film;

use App\Entity\Film\Film;
use App\Entity\Film\Person;
use App\Entity\Film\Year;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function index()
    {
        $films = Film::orderBy('id','desc')->paginate(15);
        $persons = Person::all();
        return view('admin.films.index', compact('films', 'persons'));
    }


    public function create()
    {
        //
        $persons = Person::all();
        $years = Year::all();

        return view('admin.films.create', compact('persons', 'years'));
    }


    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
        ]);

        $film = Film::add($request->all());
        $film->setYears($request->get('years'));

        return redirect()->route('admin.films.index');

    }


    public function show(Film $film)
    {
        //
    }


    public function edit(Film $film)
    {
        //
    }


    public function update(Request $request, Film $film)
    {
        //
    }


    public function destroy($film)
    {
        Film::findOrFail($film)->delete();
        return redirect()->back();
    }
}
