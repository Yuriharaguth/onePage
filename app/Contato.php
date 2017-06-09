<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {
    protected $fillable = ['contato_titulo', 'contato_mensagem', 'contato_email', 'contato_tel'];
}
