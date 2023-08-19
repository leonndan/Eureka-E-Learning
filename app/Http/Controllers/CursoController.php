<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.cursos');
    }
    public function create()
    {
        return view('cursos.cursosCreate');
    }
    public function show($id)
    {
        return view('cursos.cursosId', ['id' => $id]);
    }
}
