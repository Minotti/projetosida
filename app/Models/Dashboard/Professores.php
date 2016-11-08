<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Professores extends Model
{
    protected $table = 'professores';
    protected $primaryKey = 'Professor_ID';
    protected $guarded = ['Professor_ID'];
}
