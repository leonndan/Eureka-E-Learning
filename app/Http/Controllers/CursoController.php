<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Curso;
use App\Models\Comment;

class CursoController extends Controller
{
    public function index()
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos');
        $data = $response->json();
        // $cursos = Curso::all();
        // $cursos = Curso::paginate(5);
        return view('cursos.cursos',compact('data'));
    }
    public function create()
    {
        return view('cursos.cursosCreate');
    }
    public function store(Request $request)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url.'/cursos', [
            'id' => $request->id, //nombre_curso es el nombre del campo en el formulario
            'nombre_curso' => $request->nombre_curso, //nombre_curso es el nombre del campo en el formulario
            'descripcion_curso' => $request->descripcion_curso,
            'categoria_curso' => $request->categoria_curso,
            'precio_curso' => $request->precio_curso,
            'url_video_curso' => $request->url_video_curso,
            'imagen_curso' => $request->imagen_curso,
        ]);
        $data = $response->json();
        // return $data;
        return redirect()->route('cursos');

        // $curso = new Curso();
        // $curso->nombre_curso = $request->nombre_curso;
        // $curso->descripcion_curso = $request->descripcion_curso;
        // $curso->categoria_curso = $request->categoria_curso;
        // $curso->precio_curso = $request->precio_curso;
        // $curso->url_video_curso = $request->url_video_curso;
        // $curso->imagen_curso = $request->imagen_curso;
        // $curso->save();
        // return redirect()->route('cursos.show', $curso);
    }
    public function show($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos/'.$id);
        $data = $response->json();
        $idsub = $data[0]['id'];
        $comments = Comment::where('curso_id', $idsub)->get();

        return view('cursos.subCursosId', compact('data','comments'));
        return view('cursos.cursosId', compact('data','comments'));
        // return view('cursos.cursosPrueba', compact('data'));
        
        // $curso = Curso::find($id);
        // return view('cursos.cursosId', compact('curso'));

    }
    public function edit($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response= Http::get($url.'/cursos/edit/'.$id);
        $curso = $response->json();
        return view('cursos.cursosEdit', compact('curso'));

        // return view('cursos.cursosEdit', compact('curso'));
    }
    public function update(Request $request){
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url.'/cursos/'.$request->id, [
            'nombre_curso' => $request->nombre_curso, //nombre_curso es el nombre del campo en el formulario
            'descripcion_curso' => $request->descripcion_curso,
            'categoria_curso' => $request->categoria_curso,
            'precio_curso' => $request->precio_curso,
            'url_video_curso' => $request->url_video_curso,
            'imagen_curso' => $request->imagen_curso,
        ]);
        $data = $response->json();
        return redirect()->route('cursos.show', $request['id']);
        
        // $curso->nombre_curso = request('nombre_curso');
        // $curso->descripcion_curso = request('descripcion_curso');
        // $curso->categoria_curso = request('categoria_curso');
        // $curso->precio_curso = request('precio_curso');
        // $curso->url_video_curso = request('url_video_curso');
        // $curso->imagen_curso = request('imagen_curso');
        // $curso->save();
        // return redirect()->route('cursos.show', $curso);
    }
    public function delete($id)
    {
        $url= env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/cursos/'.$id);
        return redirect()->route('cursos');
    }
}
