<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    function index($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos/'.$id);
        $data = $response->json();

        $preguntas= Quiz::all();
        $puntajeMaximo = count($preguntas);
        $puntaje = null;
        return view('cursos.hacerQuiz', compact('preguntas',"puntaje","puntajeMaximo","data"));
    }

    public function submit(Request $request)
    {
        $respuestas = $request->all();
        $puntaje = 0;
        $preguntas= Quiz::all();
        $id=$preguntas[0]->curso_id;
    
        foreach ($preguntas as $pregunta) {
            $nombreCampo = 'pregunta_' . $pregunta->id;
            $respuestaUsuario = $respuestas[$nombreCampo];
            if ($respuestaUsuario == $pregunta->respuesta_correcta) {
                $puntaje++;
            }
        }
    
        $puntajeMaximo = count($preguntas); // Puntaje mínimo requerido
    
    
        return view('cursos.certificadoQuiz', compact('preguntas', 'puntaje', 'puntajeMaximo','id')); // Redirige de nuevo a la misma vista
        // return view('cursos.hacerQuiz', compact('preguntas', 'puntaje', 'puntajeMaximo')); // Redirige de nuevo a la misma vista
        // return view('cursos.hacerQuiz', compact('preguntas', 'puntaje', 'puntajeMaximo','data')); // Redirige de nuevo a la misma vista
    }
}
