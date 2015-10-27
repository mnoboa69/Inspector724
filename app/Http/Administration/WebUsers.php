<?php

namespace App\Http\Administration;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of WebUsers
 *
 * @author lex
 */
class WebUsers extends Model {

    protected $table = 'Webusers';
    protected $primaryKey = 'webuser_id';
    protected $fillable = ["email_address", "role_id", "password", "timezone_name", "guid"];

    public function userprofiles() {
        return $this->hasMany('\App\Http\Administration\Userprofiles', 'webuser_id', 'webuser_id');
    }

    public function photo() {
        return $this->hasMany('\App\Http\Administration\Photo', 'webuser_id', 'webuser_id');
    }

    public function roles() {
        return $this->belongsTo('\App\Http\Administration\Roles', 'role_id', 'role_id');
    }

    public function company() {
        return $this->belongsTo('\App\Http\Administration\Company', 'guid', 'guid');
    }

    public function createWebUser($email_address, $role_id, $password, $timezone_name, $guid) {
        $respuesta = array();
        $respuesta = self::create(["email_address" => $email_address, "role_id" => $role_id, "password" => md5($password), "timezone_name" => $timezone_name, "guid" => $guid, "date_format" => "Y-m-d h:i:sA"]);
//        dump($respuesta);
        if (is_object($respuesta))
            return TRUE;
//        return $respuesta;
        return false;
    }

}
