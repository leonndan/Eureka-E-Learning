<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('quizzes')->insert([
            [
                'pregunta' => '¿Que es el LSM?',
                'respuesta_correcta' => 'Lenguaje de Señas mexicano',
                'opciones' => json_encode(['Lenguaje de Señas mexicano', 'Las Señas mexicanas', 'Lenguaje de Mudos', 'Lenguaje de Sordos']),
                'curso_id' => '67'
            ],
            [
                'pregunta' => '¿Cuantas letras tiene el LSM?',
                'respuesta_correcta' => '28',
                'opciones' => json_encode(["29","28","27","26"]),
                'curso_id' => '67'
            ],
            [
                'pregunta' => 'La lengua de señas es...',
                'respuesta_correcta' => 'Caracteristicas de cada pais y region',
                'opciones' => json_encode(["Caracteristica de cada region","Universal","Caracteristicas de cada pais","Caracteristicas de cada pais y region"]),
                'curso_id' => '67'
            ],
            // Agrega más preguntas y respuestas aquí
        ]);
    }
}
