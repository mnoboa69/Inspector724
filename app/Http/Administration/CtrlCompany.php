<?php

namespace App\Http\Administration;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Request;

class companyCtrl extends Controller {

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
        //
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

    public function createCompany($plan_id) {
        $company = new Company();
        $arr_company = $company->createCompany(Request::input("name"), $plan_id, Request::input("start_date"), Request::input("end_date"), Request::input("last_name"));        
        return response()->json($arr_post);
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
