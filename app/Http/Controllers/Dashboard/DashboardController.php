<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Conteudos;
use Illuminate\Http\Request;

class DashboardController extends Controller{

    private $rqt;

    public function __construct(Request $request)
    {
        $this->rqt = $request;
    }

    public function index()
    {
        return view('Dashboard.index');
    }

    public function getLecionar()
    {
        $escolas = [
            1 => 'Instituto Federal de Mato Grosso - Campus Olegário Baldo',
            2 => 'Escola Estadual Onze de Março',
            3 => 'Escola Estadual Senador Mario Motta'
        ];

        $series = [
            1 => '2º EM',
            2 => '3º EM'
        ];

        $disciplinas = [
            1 => 'Algoritmo I',
            2 => 'Algoritmo II'
        ];

        $conteudos = [
            1 => 'O que é Algoritmo'
        ];

        return view('Dashboard.lecionar', compact('escolas', 'series', 'disciplinas', 'conteudos'));
    }

    public function entrarSala()
    {
        if (!$this->rqt->conteudo){
            return back();
        }

        return view('Dashboard.sala', compact('conteudo'));
    }

    public function buscarVideo()
    {
        return Conteudos::where('Conteudo_PalavraChave', $this->rqt->PalavraChave)->first();
    }
}