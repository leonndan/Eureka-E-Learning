<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request,$id)
    {
        $request->validate([
            'comment_body' => 'required'
        ]);

        $comment = new Comment();
        $comment->curso_id = $id;
        $comment->user_id = Auth::id();
        $comment->comment_body = $request->comment_body;
        $comment->save();

        return redirect()->route('subcursos.show',$id);
    }

    public function store2(Request $request,$id)
    {
        $request->validate([
            'comment_body' => 'required'
        ]);

        $comment = new Comment();
        $comment->curso_id = $id;
        $comment->user_id = Auth::id();
        $comment->comment_body = $request->comment_body;
        $comment->save();

        return redirect()->route('cursos.show',$id);
    }

    public function show($id)
    {
        $comments = Comment::where('curso_id', $id)->get();
        return  compact('comments');
    }
}
