<?php

namespace App\Http\Controllers;

use App\User;
use App\Sesion;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function main()
    {
        if (count($_COOKIE) < 3) 
        {        
            return view('login/main');
        }
        else {
            return redirect()->route('main_path');
        }
    }

    public function login(Request $request)
    {

        $users = User::all();
        foreach ($users as $user) 
        {
            if ((($user->usuario) == ($request->usuario)) and (($user->contraseña) == ($request->contraseña)))

            {
                $date = getdate();
                $sesion = new Sesion;
                $sesion->rol = $user->rol;
                $sesion->usuario = $user->usuario;
                $sesion->inicio = '10';
                $sesion->save();
                setcookie("sesion_energym", $sesion->id, time()+60*60*9,"/", ".energym.test");
                return redirect()->route('main_path');
            }
            else 
            {
                echo "USUARIO INVALIDO O INEXISTENTE";
            }
        }

    }

    public function cerrarsesion(Request $request)
    {
        if (count($_COOKIE) > 2) {
            $expiracion = mktime(0, 0, 0, 1, 1, 2000);
            setcookie("sesion_energym", "", $expiracion,"/", ".energym.test");

        }
        return redirect()->route('login_path');
    }

}