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
            'name' => 'required|string',
        ]);

        $data = $request->all();
        $category = \App\Category::create($data);

        // Redirection et message
        if ($category->exists) {
            $request->session()->flash('message', 'Nouvelle catégorie créée');
            return redirect()->route('CatIndex');
        } else {
            $request->session()->flash('message', 'Une erreur est survenue');
            return redirect()->route('NewCat');
        }

    }
}
