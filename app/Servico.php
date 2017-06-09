<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['nome_servico', 'descricao_servico','servico_icon'];

}
