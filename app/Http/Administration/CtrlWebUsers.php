<?php

namespace App\Http\Administration;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Foundation\Validation;
use Validator;

class CtrlWebUsers extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        return "Welcome Companies";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        $autor = new Autor();
        $autor->nombre = 'Alexis';
        $autor->save();
//        $autor = Autor::where("nombre", "=", "LEX")->first();
//        foreach ($autores as $autor) {
//            
//        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $params = $request->request->all();
        $email_address = $params['email'];
        $role_id = $params['role_id'];
        $guid = $params['guid'];
        $password = $params['password'];
        $timezone_name = $params['timezone_name'];

        $validator = Validator::make($request->all(), [
                    'email' => 'Required|min:3|max:255|email',
                    'role_id' => 'required|min:1|max:255',
                    'guid' => 'required|min:1|max:255',
                    'password' => 'required|min:3|max:255',
                    'timezone_name' => 'required|min:3|max:255',
                        ], [
                    'email.required' => 'El email es requerido',
                    'email.min' => 'El email debe tener mínimo 3 caracteres y máximo 255',
                    'email.max' => 'El email debe tener mínimo 3 caracteres y máximo 255',
                    'role_id.required' => 'El role es requerido',
                    'role_id.min' => 'El role debe tener mínimo 1 caracteres y máximo 255',
                    'role_id.max' => 'El role debe tener mínimo 1 caracteres y máximo 255',
                    'guid.required' => 'La Compania es requerido',
                    'guid.min' => 'La Compania debe tener mínimo 1 caracteres y máximo 255',
                    'guid.max' => 'La Compania debe tener mínimo 1 caracteres y máximo 255',
                    'password.required' => 'La clave es requerida',
                    'password.min' => 'La clave debe tener mínimo 3 caracteres y máximo 255',
                    'password.max' => 'La clave debe tener mínimo 3 caracteres y máximo 255',
                    'timezone_name.required' => 'La Zona Horaria es requerido',
                    'timezone_name.min' => 'La Zona Horaria debe tener mínimo 3 caracteres y máximo 255',
                    'timezone_name.max' => 'La Zona Horaria debe tener mínimo 3 caracteres y máximo 255',
        ]);
        // customize messages
        /* if ($validator->messages()->has('name')) {
          $message = "El nombre es requerido y debe tener una longitud de entre 3 y 255 caracteres";
          $validator->messages()->get('name', $message);
          } */

        if ($validator->fails()) {
            return redirect('/user')
                            ->withErrors($validator)
                            ->withInput();
        }

        $arr_user = array();
        $user = new WebUsers();
        $arr_user = $user->createWebUser($email_address, $role_id, $password, $timezone_name, $guid);
        return response()->json($arr_user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function obtenerPost($id_autor) {
        $post = new Post();
        $arr_post = $post->obtenerPostPorAutor($id_autor);
        return response()->json($arr_post);
    }

    public function createCompany(Request $request) {
        $params = $request->request->all();
        $name = $params['name'];
        $start_date = $params['start_date'];
        $end_date = $params['end_date'];
        $last_name = $params['last_name'];
//        $this->validate($request, [
//            'name' => 'required|min:3|max:255|AlphaDash',
//            'start_date' => 'required|date',
//            'end_date' => 'required|date|after:start_date',
//            'last_name' => 'required|min:3|max:255',
//        ]);
        /* $rules = array(
          'name' => 'required|min:3|max:255|AlphaDash',
          'start_date' => 'required|date',
          'end_date' => 'required|date|after:start_date',
          'last_name' => 'required|min:3|max:255',
          ); */
        $validator = Validator::make($request->all(), [
                    'name' => 'Required|min:3|max:255',
                    'start_date' => 'required|date',
                    'end_date' => 'required|date|after:start_date',
                    'last_name' => 'required|min:3|max:255',
                        ], [
                    'name.required' => 'El nombre es requerido',
                    'name.min' => 'El nombre debe tener mínimo 3 caracteres y máximo 255',
                    'name.max' => 'El nombre debe tener mínimo 3 caracteres y máximo 255',
                    'start_date.required' => 'La fecha de inicio es requerida',
                    'start_date.date' => 'Debe ingresar una fecha de inicio válida en el formato dd/mm/aaaa',
                    'end_date.required' => 'La fecha fin es requerida',
                    'end_date.date' => 'Debe ingresar una fecha fin válida en el formato dd/mm/aaaa',
                    'end_date.after' => 'La fecha fin debe ser mayor que la fecha inicio',
                    'last_name.required' => 'El apellido es requerido',
                    'last_name.min' => 'El apellido debe tener mínimo 3 caracteres y máximo 255',
                    'last_name.max' => 'El apellido debe tener mínimo 3 caracteres y máximo 255',
        ]);
        // customize messages
        /* if ($validator->messages()->has('name')) {
          $message = "El nombre es requerido y debe tener una longitud de entre 3 y 255 caracteres";
          $validator->messages()->get('name', $message);
          } */

        if ($validator->fails()) {
            return redirect('/company')
                            ->withErrors($validator)
                            ->withInput();
        }
        $plan_id = 1;
        $arr_company = array();
        $company = new Company();
        $arr_company = $company->createCompany($name, $plan_id, $start_date, $end_date, $last_name);
        return response()->json($arr_company);
    }

    public function obtenerAutores($condicion) {
        $autor = new Autor();
        $arr_post = $autor->getAutoresPorPost($condicion);
        return response()->json($arr_post);
    }

    public function obtenerAutoresCondi($auto, $condicion) {
        $autor = new Autor();
        $arr_post = $autor->getAutoresCondi($auto, $condicion);
        return response()->json($arr_post);
    }

    public function obtenerPostParticular($var) {
        $post = new Post();
        $arr_post = $post->obtenerPostParticula($var);
        return response()->json($arr_post);
    }

    public function crearPorPost() {
        $post = new Post();
        $respuesta = $post->crearPost(1, Request::input("titulo"), Request::input("mensaje"));
        if ($respuesta) {
            return view('principal');
        }
        return redirect('/post');
    }

}
