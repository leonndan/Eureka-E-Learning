<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\SubCurso;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    function index($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos/subcurso/'.$id);
        $data = $response->json();

        // $preguntas= Quiz::all();
        $preguntas= Quiz::where('curso_id', $id)->get();
        $puntajeMaximo = count($preguntas);
        $puntaje = null;
        return view('cursos.hacerQuiz', compact('preguntas',"puntaje","puntajeMaximo","data"));
    }

    public function submit(Request $request,$ids)
    {
        $respuestas = $request->all();
        $puntaje = 0;
        // $preguntas= Quiz::all();
        $preguntas= Quiz::where('curso_id', $ids)->get();
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
