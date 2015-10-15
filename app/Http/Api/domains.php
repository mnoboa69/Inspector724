<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domains extends Model
{
    //
    protected $table = 'domains';
    protected $primaryKey = 'domain_id';
    
    public function applicationmasters(){
        return $this->hasMany('App\Http\Api\applicationmaster','domain_id','domain_id');
    }
    
    public function application_exceptions(){
        return $this->hasMany('App\Http\Api\application_exception','domain_id','domain_id');
    }
}
