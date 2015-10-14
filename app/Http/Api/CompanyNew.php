<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyNew extends Model
{
    //
    protected $table = 'CompanyNew';
    protected $primaryKey = 'guid';
    
    public function plans(){
        return $this->belongsTo('App\Http\Api\plans','plan_id','plan_id');
    }
}
