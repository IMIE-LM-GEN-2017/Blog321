<?php

namespace App\Http\Controllers\Admin;

use App\Tag as TagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $tagsDeLaBaseDeDonnees = DB::table('tags')->get();

        return view('admin.tag.index', ['tagsPourLaVue' => $tagsDeLaBaseDeDonnees]);
    }

    public function add()
    {
        return view('admin.tag.add');
    }

    public function create(Request $request)
    {
        // validation des données
        $this->validate($request, [
            'tag' => 'required|string',
        ]);

        $data = $request->all();
        $tag = TagModel::create($data);

        // Redirection et message
        if ($tag->exists) {
            Session::flash('message', 'Nouveau tag créé');
            return redirect()->route('IndexTags');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('NewTag');
        }
    }

    public function edit($id)
    {
        $enregistrementAModifier = TagModel::findOrFail($id);

        return view('admin.tag.edit', [
            'enregistrement' => $enregistrementAModifier,
        ]);

    }

    public function update(Request $objetDeRequete, $id)
    {
        // validation des données
        $this->validate($objetDeRequete, [
            'admin.tag' => 'required|string',
        ]);
        $enregistrement = TagModel::findOrFail($id);
        $nouvellesValeurs = $objetDeRequete->all();
        var_dump($nouvellesValeurs);die;

        $etatEnregistrement = $enregistrement->update($nouvellesValeurs);

        // Redirection et message
        if ($etatEnregistrement) {
            Session::flash('message', 'Tag mis à jour');
            return redirect()->route('IndexTags');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('EditTag', ['id' => $id]);
        }
    }

    public function delete($id)
    {
    }

    public function show($id)
    {
    }

}
