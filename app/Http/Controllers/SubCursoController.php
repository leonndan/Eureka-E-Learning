<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SubCurso;

class SubCursoController extends Controller
{
    public function index()
    {
        // $url= env('URL_SERVER_API', 'http://127.0.0.1');
        return view('cursos.cursosSubCursoCreate');

    }
    public function create($id)
    {
        return view('cursos.cursosSubCursoCreate',compact('id'));
    }

    public function store(Request $request, $id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url.'/cursos/subcurso', [
            'id' => $request->id, //nombre_curso es el nombre del campo en el formulario
            'subtitulo' => $request->subtitulo, //nombre_curso es el nombre del campo en el formulario
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'video' => $request->video,
            'curso_id' => $request->curso_id,
        ]);
        $data = $response->json();
        // return $data;
        return redirect()->route('cursos.show',$id);
    }
}
