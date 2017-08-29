<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function add()
    {
        return view('category.add');
    }

    public function create(Request $request)
    {
        // validation des données
        $this->validate($request, [
            'name' => 'required|string'
        ]);

        $data = $request->all();

        \App\Category::create($data);

        // Redirection et message
        Session::flash('message', 'Nouvelle catégorie créée');

        return redirect()->route('CatIndex');
    }
}
