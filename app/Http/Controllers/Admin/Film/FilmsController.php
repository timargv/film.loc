<?php

namespace App\Http\Controllers\Admin\Film;

use App\Entity\Film\Film;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function index()
    {
        $films = Film::orderBy('created_at', 'desc')->paginate(15);;
        return view('admin.films.index', compact('films'));
    }


    public function create()
    {
        //
        return view('admin.films.create');
    }


    public function store(Request $request)
    {
        //
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


    public function destroy(Film $film)
    {
        //
    }
}
