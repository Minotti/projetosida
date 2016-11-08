<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Alunos;
use App\Models\Dashboard\Professores;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    private $guard, $rqt;

    public function __construct(Guard $guard, Request $rqt)
    {
        $this->guard = $guard;
        $this->rqt = $rqt;
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        if ($this->guard->attempt($this->rqt->except(['_token', 'tipo']))){
            /*Verifica se o Tipo (Aluno / Professor) selecionado condiz com o usuário Logado*/
            $tipo = $this->rqt->tipo;
            $verificar = Professores::where('User_ID', Auth::user()->id)->first();

            if ($tipo == 'aluno'){
                $verificar = Alunos::where('User_ID', Auth::user()->id)->first();
            }

            if (!$verificar){
                Auth::logout();
                return redirect(route('login'))->withErrors('Usuário não existente')->withInput();
            }

            /**/
            return redirect(route('dashboard'));
        }

        return back()->withInput();
    }

    public function logout()
    {
        $this->guard->logout();
        return redirect(route('login'));
    }
}