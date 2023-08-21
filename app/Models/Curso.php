<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $connection = 'cursosdb';
    protected $table = 'table_cursos';
    use HasFactory;
}
