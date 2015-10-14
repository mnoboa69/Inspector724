<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application_excepcion extends Model
{
    //
    protected $table = 'application_excepcion';
    protected $primaryKey = 'guid';
    protected $primaryKey = 'application_id';
    
    public function domainss(){
        return $this->belongsTo('App\Http\Api\domains','domain_id','domain_id');
    }
    
    public function applicationtypes(){
        return $this->belongsTo('App\Http\Api\applicationtype','apptype_id','applicationtype_id');
    }
    
    public function categoriess(){
        return $this->belongsTo('App\Http\Api\categories','category_id','category_id');
    }
}
