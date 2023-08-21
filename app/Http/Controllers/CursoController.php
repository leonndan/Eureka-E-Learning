<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        // $cursos = Curso::all();
        $cursos = Curso::paginate(5);
        return view('cursos.cursos',compact('cursos'));
    }
    public function create()
    {
        return view('cursos.cursosCreate');
    }
    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.cursosId', compact('curso'));
    }
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre_curso = $request->nombre_curso;
        $curso->descripcion_curso = $request->descripcion_curso;
        $curso->categoria_curso = $request->categoria_curso;
        $curso->precio_curso = $request->precio_curso;
        $curso->url_video_curso = $request->url_video_curso;
        $curso->imagen_curso = $request->imagen_curso;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
    public function edit(Curso $curso)
    {
        return view('cursos.cursosEdit', compact('curso'));
    }
    public function update(Curso $curso){
        $curso->nombre_curso = request('nombre_curso');
        $curso->descripcion_curso = request('descripcion_curso');
        $curso->categoria_curso = request('categoria_curso');
        $curso->precio_curso = request('precio_curso');
        $curso->url_video_curso = request('url_video_curso');
        $curso->imagen_curso = request('imagen_curso');
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
