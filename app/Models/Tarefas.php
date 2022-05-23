<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
   
    protected $fillable = [
        'id',
        'titulo_tarefa', 
        'descricao',
        'data_alteracao',
        'feito'
    ];

    protected $primary_key = 'id';

    public $timestamps = false;
  
}
