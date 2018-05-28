<?php

namespace App\Http\Controllers;
use App\User;
use App\Sesion;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {

        $sesion = Sesion::first();
        if (is_null($sesion)) {
            return redirect()->route('login_path');
        }
        else {
            return view('clientes/index')->with(['sesion'=> $sesion]);;
        }

    }
}
