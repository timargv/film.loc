<?php

namespace App\Http\Controllers\Admin\Film;

use App\Entity\Film\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YearsController extends Controller
{
    public function index()
    {
        $years = Year::paginate(90);
        return view('admin.years.index', compact('years'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Year $year)
    {
        //
    }


    public function edit(Year $year)
    {
        //
    }


    public function update(Request $request, Year $year)
    {
        //
    }


    public function destroy(Year $year)
    {
        //
    }
}
