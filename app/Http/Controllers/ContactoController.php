<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function guardar(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->correo = $request->input('correo');
        $contacto->asunto = $request->input('asunto');
        $contacto->mensaje = $request->input('mensaje');
        $contacto->save();

        return redirect()->route('contacto')->with('message', 'Mensaje enviado correctamente.');
    }

    public function eliminar($id)
    {
        $mensaje=Contacto::findOrFail($id);
        $mensaje->delete();

        return redirect()->back()->with('success', 'Mensaje eliminado correctamente.');

    }
}