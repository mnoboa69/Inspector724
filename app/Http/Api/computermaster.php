<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computermaster extends Model
{
    //
    protected $table = 'computermaster';
    protected $primaryKey = 'computermaster_id';
    
    public function company(){
        return $this->belongsTo('App\Http\Api\company','guid','guid');
    }
}
