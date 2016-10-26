<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Conteudos extends Model{
    protected $table = 'conteudos';
    protected $primaryKey = 'Conteudo_ID';
    protected $guarded = ['Conteudo_ID'];
}