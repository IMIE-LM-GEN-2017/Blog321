<?php

namespace App\Http\Controllers;

use App\Category as CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public $plop='ler';

    /**
     * Displays the list of categories
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Shows the form to create a category
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('category.add');
    }

    /**
     * Saves the new record
     *
     * @param Request $request The request object
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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
            Session::flash('message', 'Nouvelle catégorie créée');
            return redirect()->route('CatIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('NewCat');
        }

    }

    /**
     * Deletes a record
     *
     * @param int $id The record's Id
     * @param Request $request The Request object
     */
    public function delete($id)
    {
        $category = CategoryModel::findOrFail($id);
        $category->delete();

        Session::flash('message', 'Catégorie supprimée');

        return redirect()->route('CatIndex');
    }

    /**
     * Shows the form to edit a record
     *
     * @param int $id The record's Id
     */
    public function edit($id)
    {
        $category = CategoryModel::findOrFail($id);

        return view('category.edit', ['category' => $category]);
    }

    /**
     * Updates a record in the DB
     *
     * @param Request $request The request object
     * @param int $id The record's Id
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $category = CategoryModel::findOrFail($id);

        if ($category->update($request->all())) {
            Session::flash('message', 'Catégorie mise à jour');
            return redirect()->route('CatIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('EditCat', ['id' => $id]);
        }
    }

    /**
     * Displays a record
     *
     * @param int $id The record's Id
     */
    public function view($id)
    {
        $category = CategoryModel::findOrFail($id);

        return view('category.view', ['category' => $category]);
    }
}
