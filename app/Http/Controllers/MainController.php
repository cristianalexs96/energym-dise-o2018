<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GlobalController; 

use App\User;
use App\Sesion;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        echo GlobalController::sesion_control(); 
        return view('main/mainpage');
    }

    
}
