<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //
    protected $table = 'photo';
    protected $primaryKey = 'id';
    
    public function webusers(){
        return $this->belongsTo('App\Http\Api\webusers','webuser_id','webuser_id');
    }
    
}
