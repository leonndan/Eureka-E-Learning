<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    function index($id)
    {
        return view('cursos.hacerQuiz', compact('id'));
    }
}
