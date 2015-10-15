<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class webusers extends Model
{
    //
    protected $table = 'webusers';
    protected $primaryKey = 'webuser_id';
    
    public function userprofiless(){
        return $this->hasMany('App\Http\Api\userprofiles','webuser_id','webuser_id');
    }
    
    public function photos(){
        return $this->hasMany('App\Http\Api\photo','webuser_id','webuser_id');
    }
    
    public function roles(){
        return $this->belongsTo('App\Http\Api\roles','role_id','role_id');
    }
    
    public function company(){
        return $this->belongsTo('App\Http\Api\company','guid','guid');
    }
}
