<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#LOGIN

Route::name('login_path')->get('/login', 'LoginController@main');
Route::name('login_sesion_path')->post('/login/auth', 'LoginController@login');
Route::name('cerrarsesion_path')->get('/deletesession', 'LoginController@cerrarsesion');

#MAIN PAGE

Route::name('main_path')->get('/main', 'MainController@index');

#CLIENTES PAGE

Route::name('clientes_path')->get('/clientes', 'ClientesController@index');

#EMPLEADOS PAGE

Route::name('profesores_path')->get('/empleados', 'EmpleadosController@index');

#VIEW COMPOSER

View::composer(['layouts.app'], function ($view){

	$sesion_id = $_COOKIE['sesion_energym'];  
    $sesion = App\Sesion::find($sesion_id);
    $view->with('sesion',$sesion);

}
);

#ERRORES

Route::name('invalidrol_path')->get('/invalidrol', 'ErrorController@invalidrol');




