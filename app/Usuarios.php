<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = [
        'RA',
        'nome',
        'curso',
        'periodo',
        'endereco',
        'email'
    ];

}

