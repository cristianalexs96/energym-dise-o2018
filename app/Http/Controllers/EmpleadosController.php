<?php

namespace App\Http\Controllers;
use App\User;
use App\Sesion;

use App\Http\Controllers\GlobalController;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        echo GlobalController::sesion_control();
        echo GlobalController::controlrol_1();
        return view('empleados/index');
        

    }
}
