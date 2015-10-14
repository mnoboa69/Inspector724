<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $table = 'company';
    protected $primaryKey = 'guid';
    
    public function groupmasters(){
        return $this->hasMany('App\Http\Api\groupmaster','guid','guid');
    }
    
    public function computermasters(){
        return $this->hasMany('App\Http\Api\computermaster','guid','guid');
    }
    
    public function webuserss(){
        return $this->hasMany('App\Http\Api\webusers','guid','guid');
    }
    
    public function agentuserss(){
        return $this->hasMany('App\Http\Api\agentusers','guid','guid');
    }
    
    public function alarmss(){
        return $this->hasMany('App\Http\Api\alarms','guid','guid');
    }
    
    public function planss(){
        return $this->belongsTo('App\Http\Api\plans','plan_id','plan_id');
    }
}
