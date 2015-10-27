<?php
/**
 * Created by PhpStorm.
 * User: Alejandro Barrionuevo <mbarrionuevo@anyway.com.ec>
 * Date: 27/10/2015
 * Time: 9:56
 */

namespace App\Http\Administration;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Roles';
    protected $primaryKey = 'role_id';
    protected $fillable = ["name"];

    public function webusers() {
        return $this->hasMany('\App\Http\Administration\WebUsers', 'role_id', 'role_id');
    }

    public function createRole($name) {
        $role = new self();
        $respuesta = $role::create(["name" => $name]);
        if (is_object($respuesta)) {
            return true;
        }
        return false;
    }

    public function getRoles() {
        $role = new self();
        $respuesta = $role::all();
        return $respuesta;
    }
}