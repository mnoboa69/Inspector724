<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userprofiles extends Model
{
    //
    protected $table = 'userprofiles';
    protected $primaryKey = 'userprofiles_id';
    
    public function webusers(){
        return $this->belongsTo('App\Http\Api\webusers','webuser_id','webuser_id');
    }
}
