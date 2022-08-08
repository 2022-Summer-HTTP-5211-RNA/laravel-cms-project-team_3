<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Employment;

class EmploymentController extends Controller
{
    public function list()
    {
        return view('employment.list', [
            'employment' => Employment::all()
        ]);
    }

    public function addForm()
    {
        return view('employment.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'companyName' => 'required',
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date'
        ]);

        $employment = new Employment();
        $employment->companyName = $attributes['companyName'];
        $employment->title = $attributes['title'];
        $employment->description = $attributes['description'];
        $employment->startDate = $attributes['startDate'];
        $employment->endDate = $attributes['endDate'];
        $employment->save();

        return redirect('/console/employment/list')
            ->with('message', 'Employment has been added!');
    }

    public function editForm(Employment $employment)
    {
        return view('employment.edit', [
            'employment' => $employment,
        ]);
    }

    public function edit(Employment $employment) {
        $attributes = request()->validate([
            'companyName' => 'required',
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date'
        ]);

        $employment->companyName = $attributes['companyName'];
        $employment->title = $attributes['title'];
        $employment->description = $attributes['description'];
        $employment->startDate = $attributes['startDate'];
        $employment->endDate = $attributes['endDate'];
        $employment->save();

        return redirect('/console/employment/list')
            ->with('message', 'Employment has been edited!');
    }

    public function delete(Employment $employment)
    {
        $employment->delete();

        return redirect('/console/employment/list')
            ->with('message', 'Employment has been deleted!');
    }
}
