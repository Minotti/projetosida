<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'Aluno_ID';
    protected $guarded = ['Aluno_ID'];
}
