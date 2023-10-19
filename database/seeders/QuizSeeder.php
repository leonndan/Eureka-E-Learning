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
                'curso_id' => '53'
            ],
            [
                'pregunta' => '¿Cuantas letras tiene el LSM?',
                'respuesta_correcta' => '28',
                'opciones' => json_encode(["29","28","27","26"]),
                'curso_id' => '53'
            ],
            [
                'pregunta' => 'La lengua de señas es...',
                'respuesta_correcta' => 'Caracteristicas de cada pais y region',
                'opciones' => json_encode(["Caracteristica de cada region","Universal","Caracteristicas de cada pais","Caracteristicas de cada pais y region"]),
                'curso_id' => '55'
            ],
            [
                'pregunta' => '¿Cual es una tecnica de enseñanza altamente efectiva?',
                'respuesta_correcta' => 'Gamificación o ludificación (juegos)',
                'opciones' => json_encode(["No dar clase","Gamificación o ludificación (juegos)","Asumir que ya sabe","No enseñar"]),
                'curso_id' => '54'
            ]
            // Agrega más preguntas y respuestas aquí
        ]);
    }
}
