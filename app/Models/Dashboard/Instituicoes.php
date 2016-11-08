<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Instituicoes extends Model
{
    protected $table = 'instituicoes';
    protected $primaryKey = 'Instituicao_ID';
    protected $guarded = ['Instituicao_ID'];
}
