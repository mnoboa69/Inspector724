<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aplicationtype extends Model
{
    //
    protected $table = 'aplicationtype';
    protected $primaryKey = 'aplicationtype_id';
    
    public function applicationmasters(){
        return $this->hasMany('App\Http\Api\applicationmaster','apptype_id','applicationtype_id');
    }
    
    public function application_exceptions(){
        return $this->hasMany('App\Http\Api\application_exception','apptype_id','applicationtype_id');
    }
}
