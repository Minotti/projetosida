<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class InstituicoesProfessores extends Model
{
    protected $table = 'instituicao_professores';
    protected $primaryKey = 'InstituicaoProfessores_ID';
    protected $guarded = ['InstituicaoProfessores_ID'];
}
