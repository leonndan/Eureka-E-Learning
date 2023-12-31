<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCurso extends Model
{
    protected $connection = 'cursosdb';
    protected $table = 'sub_cursos';
    use HasFactory;

    public function comments(){
        return $this->hasMany(Comment::class, "curso_id", "id");
    }
}
