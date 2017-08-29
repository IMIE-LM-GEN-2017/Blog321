<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function index(){
        return view('category.index');
    }

    public function add(){
        return view('category.add');
    }
}
