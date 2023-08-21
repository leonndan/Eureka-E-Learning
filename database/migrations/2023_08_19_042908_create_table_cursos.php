<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'cursosdb';
    public function up()
    {
        Schema::create('table_cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso')->unique();
            $table->text('descripcion_curso');
            $table->string('imagen_curso');
            $table->integer('precio_curso');
            $table->string('url_video_curso')->unique();
            $table->integer('calificacion_curso')->nullable();
            $table->string('categoria_curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_cursos');
    }
}
