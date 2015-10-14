<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alarm_conditions extends Model
{
    //
    protected $table = 'alarm_conditions';
    protected $primaryKey = 'alarm_condition_id';
    
    public function alarmss(){
        return $this->belongsTo('App\Http\Api\alarms','alarm_id','alarm_id');
    }
}
