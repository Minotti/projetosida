<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class Sitecontroller extends Controller{

    public function index()
    {
        return view('Site.home');
    }

    public function contato()
    {
        return view('Site.contato');
    }

    public function sida()
    {
        return view('Site.sida');
    }

    public function getAlfabetizacao(){
        $tipo = [1 => 'Alfabeto', 2 => 'Números', 3 => 'Objetos / Lugares'];
        $alfabeto = [
            'A'=>'A', 'B'=>'B', 'C'=>'C', 'D'=>'D', 'E'=>'E',
            'F'=>'F', 'G'=>'G', 'H'=>'H', 'I'=>'I', 'J'=>'J',
            'K'=>'K', 'L'=>'L', 'M'=>'M', 'N'=>'N', 'O'=>'O',
            'P'=>'P', 'Q'=>'Q', 'R'=>'R', 'S'=>'S', 'T'=>'T',
            'U'=>'U', 'V'=>'V', 'W'=>'W', 'X'=>'X', 'Y'=>'Y',
            'Z'=>'Z'
        ];

        $numeros = [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9];

        $objetos = ['escola'=>'Escola', 'livro'=>'Livro'];

        return view('Site.alfabetizacao', compact('tipo', 'alfabeto', 'numeros', 'objetos'));
    }
}