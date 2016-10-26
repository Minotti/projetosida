<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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