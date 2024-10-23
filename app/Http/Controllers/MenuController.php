<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //Méthode pour afficher le menu
    public function index()
    {
        
        return view('menu'); // Assurez-vous que le fichier menu.blade.php existe dans resources/views
    }


   

}