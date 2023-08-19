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
    public function up()
    {
        Schema::connection('cursosdb')->create('table_cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso');
            $table->text('descripcion_curso');
            $table->string('imagen_curso');
            $table->string('precio_curso');
            $table->string('url_video_curso')->unique();
            $table->integer('calificacion_curso');
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
