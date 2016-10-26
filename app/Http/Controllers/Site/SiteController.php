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
}