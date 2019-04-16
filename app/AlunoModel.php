<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
     protected $fillable = [
        'nome', 'curso', 'email',
    ];
}
