<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GlobalController;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function invalidrol()
    {
    	echo GlobalController::sesion_control();
    	return view('errors.invalidrol');
    } 
}
