<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionMenuController extends Controller
{
    public function index()
{
    return view('htmlprojetweb/menugestion');
}
}
