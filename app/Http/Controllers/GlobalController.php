<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sesion;

class GlobalController extends Controller
{
    public static function sesion_control() 
    {
		$sesion_id = $_COOKIE['sesion_energym'];  
	    $sesion = Sesion::find($sesion_id);
	    if (count($_COOKIE) < 3) {
          	return redirect()->route('login_path');
        }
	    if (is_null($sesion)) {
			return redirect()->route('cerrarsesion_path');
		}

    }

    public static function controlrol_1(){
    	$sesion_id = $_COOKIE['sesion_energym'];  
	    $sesion = Sesion::find($sesion_id);
	    if ($sesion->rol != '1'){
	    	return redirect()->route('invalidrol_path');
	    }
    }


    public static function controlrol_2(){
    	$sesion_id = $_COOKIE['sesion_energym'];  
	    $sesion = Sesion::find($sesion_id);
	    if ($sesion->rol != '2'){
	    	return redirect()->route('invalidrol_path');
	    }

    }

    public static function controlrol_3(){
    	$sesion_id = $_COOKIE['sesion_energym'];  
	    $sesion = Sesion::find($sesion_id);
	    if ($sesion->rol != '3'){
	    	return redirect()->route('invalidrol_path');
	    }
    }

	public static function controlrol_4(){
		$sesion_id = $_COOKIE['sesion_energym'];  
	    $sesion = Sesion::find($sesion_id);
	    if ($sesion->rol != '4'){
	    	return redirect()->route('invalidrol_path');
	    }
    }

    public static function controlrol_5(){
    	$sesion_id = $_COOKIE['sesion_energym'];  
	    $sesion = Sesion::find($sesion_id);
	    if ($sesion->rol != '5'){
	    	return redirect()->route('invalidrol_path');
	    }

    }



}
