<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    //
    protected $table = 'plans';
    protected $primaryKey = 'plan_id';
    
    public function companies(){
        return $this->hasMany('App\Http\Api\company','plan_id','plan_id');
    }
    
    public function companiesnew(){
        return $this->hasMany('App\Http\Api\CompanyNew','plan_id','plan_id');
    }
}
