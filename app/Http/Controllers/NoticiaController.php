<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticia;

class NoticiaController extends Controller
{
    public function index() {
        $noticias = noticia::all();
       
        
        $argumentos = array();
        $argumentos['noticias'] = $noticias;

        return view('noticias.index', $argumentos);
    }
    public function show($id) {
        //Busca un registro apartir de la llave primaria
        //llave primaria
        //SELECT * FROM noticias WHERE id = 4
        $noticia = Noticia::find($id);

        $argumentos = array();
        $argumentos['noticia'] = $noticia;

        return view('noticias.show', $argumentos);

    }
}

