<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alarms extends Model
{
    //
    protected $table = 'alarms';
    protected $primaryKey = 'alarm_id';
    
    public function alarm_conditionss(){
        return $this->hasMany('App\Http\Api\alarm_conditions','alarm_id','alarm_id');
    }
    
    public function alarm_actionss(){
        return $this->hasMany('App\Http\Api\alarm_actions','alarm_id','alarm_id');
    }
    
    public function companies(){
        return $this->belongsTo('App\Http\Api\company','guid','guid');
    }
}
