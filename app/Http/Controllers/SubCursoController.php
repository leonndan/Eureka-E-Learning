<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SubCurso;

class SubCursoController extends Controller
{
    public function index()
    {
        // $url= env('URL_SERVER_API', 'http://127.0.0.1');
        return view('');

    }
    public function show($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos/subcurso/'.$id);
        $data = $response->json();

        return view('cursos.subCursosId', compact('data'));
        // return view('cursos.cursosPrueba', compact('data'));
        
        // $curso = Curso::find($id);
        // return view('cursos.cursosId', compact('curso'));

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
        return redirect()->route('subcursos.show',$id);
    }
    public function edit($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos/subcurso/edit/'.$id);
        $curso = $response->json();
        return view('cursos.subCursosEdit', compact('curso'));

        // return view('cursos.cursosEdit', compact('curso'));
    }
    public function update(Request $request){
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url.'/cursos/subcurso/'.$request->id, [
            'subtitulo' => $request->subtitulo, //nombre_curso es el nombre del campo en el formulario
            'descripcion' => $request->descripcion,
            'video' => $request->video,
            'imagen' => $request->imagen,
        ]);
        $data = $response->json();
        return redirect()->route('subcursos.show', $request['id']);
        
        // $curso->nombre_curso = request('nombre_curso');
        // $curso->descripcion_curso = request('descripcion_curso');
        // $curso->categoria_curso = request('categoria_curso');
        // $curso->precio_curso = request('precio_curso');
        // $curso->url_video_curso = request('url_video_curso');
        // $curso->imagen_curso = request('imagen_curso');
        // $curso->save();
        // return redirect()->route('cursos.show', $curso);
    }
}
