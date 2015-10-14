<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agentusers extends Model
{
    //
    protected $table = 'agentusers';
    protected $primaryKey = 'agent_id';
    
    public function companies(){
        return $this->belongsTo('App\Http\Api\company','guid','guid');
    }
}
