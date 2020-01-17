<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\noticia;

class NoticiaController extends Controller
{
    public function index() {
        $noticias = noticia::all();
       
        
        $argumentos = array();
        $argumentos['noticias'] = $noticias;

        return view('noticias.index', $argumentos);
    }
}
