<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoas';

    protected $fillable = ['nome', 'telefone', 'cidade_estado', 'email', 'categoria'];

    protected $primaryKey = 'id';
}
