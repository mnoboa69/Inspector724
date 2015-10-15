<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupmaster extends Model
{
    //
    protected $table = 'groupmaster';
    protected $primaryKey = 'groupmaster_id';
    
    public function company(){
        return $this->belongsTo('App\Http\Api\company','guid','guid');
    }
}
