<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
     protected $fillable = ['nome_site', 'frase_apresentacao'];
}
