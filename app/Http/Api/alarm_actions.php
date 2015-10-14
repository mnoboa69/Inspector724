<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alarm_actions extends Model
{
    //
    protected $table = 'alarm_actions';
    protected $primaryKey = 'alarm_action_id';
    
    public function alarmss(){
        return $this->belongsTo('App\Http\Api\alarms','alarm_id','alarm_id');
    }
}
