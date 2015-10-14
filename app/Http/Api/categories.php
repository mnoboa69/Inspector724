<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    
    public function applicationmasters(){
        return $this->hasMany('App\Http\Api\applicationmaster','category_id','category_id');
    }
    
    public function application_exceptions(){
        return $this->hasMany('App\Http\Api\application_exception','category_id','category_id');
    }
}
