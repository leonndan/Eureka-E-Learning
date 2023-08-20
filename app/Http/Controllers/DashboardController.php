<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function show()
    {
        $usuarios=User::all();
        $totalUsuarios=User::count();
        $mensajes=Contacto::all();
        $totalMensajes=Contacto::count();

        
        return view("dashboard", compact("usuarios","totalUsuarios","mensajes","totalMensajes"));
       
    }

    

   

}
