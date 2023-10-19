<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    function index()
    {
        $preguntas= Quiz::all();
        $puntajeMaximo = count($preguntas);
        $puntaje = null;
        return view('cursos.hacerQuiz', compact('preguntas',"puntaje","puntajeMaximo"));
    }

    public function submit(Request $request)
    {
        $respuestas = $request->all();
        $puntaje = 0;
        $preguntas= Quiz::all();
    
        foreach ($preguntas as $pregunta) {
            $nombreCampo = 'pregunta_' . $pregunta->id;
            $respuestaUsuario = $respuestas[$nombreCampo];
            if ($respuestaUsuario == $pregunta->respuesta_correcta) {
                $puntaje++;
            }
        }
    
        $puntajeMaximo = count($preguntas); // Puntaje mínimo requerido
    
    
        return view('cursos.hacerQuiz', compact('preguntas', 'puntaje', 'puntajeMaximo')); // Redirige de nuevo a la misma vista
    }
}
