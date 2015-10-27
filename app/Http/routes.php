<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/company', '\App\Http\Administration\CtrlCompany@createCompany');

Route::get('/company', function() {
//    return view('principal');
    return view('company-form');
});

Route::post('/admin/createCompany', '\App\Http\Administration\CtrlCompa@createCompany');

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/re_uso', function () {
    
    $arrayPrueba = array("1team" => "TeamMember", "2team" => "TeamLider", "3team" => "TeamQA");
    $array = array(0 => "Todos...") + $arrayPrueba;
    $arrayDatosGrupo = array(1 => "Comercial", 2 => "IT", 3 => "Administrativo");
    $arrayGrupo = array(0 => "Todos") + $arrayDatosGrupo;
    
    $selected = array();

    return View::make("re_uso", compact('arrayGrupo', 'selected'), compact('array', 'selected'));
});

//Route::get("usuarios/update/{id}", function($id){
//            
//        $roles = Rol::lists('name', 'id');
//        $types = Tipo::lists('name', 'id');
//        return View::make("usuarios.update", array("id" => $id,"user" => $user,"roles" => $roles, "types" => $types ));
//});