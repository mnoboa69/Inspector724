<?php
/**
 * Created by PhpStorm.
 * User: Alejandro Barrionuevo <mbarrionuevo@anyway.com.ec>
 * Date: 27/10/2015
 * Time: 9:54
 */

namespace App\Http\Administration;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;


class CtrlRole extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        return "Welcome Roles";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $role = new Role();
        $role->name = 'admin';
        $role->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $params = $request->all();
        $name = $params['name'];
        $rules = [
            'name' => 'required|min:3|max:50',
        ];

        // customize messages
        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener mínimo 3 caracteres y máximo 50',
            'name.max' => 'El nombre debe tener mínimo 3 caracteres y máximo 50',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/role')
                ->withErrors($validator)
                ->withInput();

        }

        $role = new Role();
        $arrRole = $role->createRole($name);
        if ($arrRole) {
            return redirect('/admin/getRoles');
        }
        return redirect('/role');
        //return response()->json($arrRole);
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

    public function getRoles() {
        $role = new Role();
        $arrRoles = $role->getRoles();
        return view('roles-grid', ['roles' => $arrRoles]);
    }
}