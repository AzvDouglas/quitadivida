<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'cpf';
    public $incrementing = false;
    
    protected $fillable = [
        'cpf',
        'nome',
        'telefones',
        'emails',
        'nascimento',
        'contactado_em',
        'coletado_em',
    ];
}
