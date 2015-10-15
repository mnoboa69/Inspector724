<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    
    public function webuserss(){
        return $this->hasMany('App\Http\Api\webusers','role_id','role_id');
    }
}
