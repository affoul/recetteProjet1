<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
     public function about()
    {
        return view('components2.apropos'); // ou 'layouts2.nomDuFichier' selon l'emplacement
    }
}
