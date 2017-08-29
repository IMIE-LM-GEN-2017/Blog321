<?php

namespace App\Http\Controllers;

class User extends Controller
{
    public function index()
    {
        $plop = 'Super !';
        return view('user.index', ['resultats'=>$plop]);
    }
}
