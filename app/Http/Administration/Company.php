<?php

namespace App\Http\Administration;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Company
 *
 * @author lex
 */
class Company extends Model {

    protected $table = 'Company';
    protected $primaryKey = 'guid';
    protected $fillable = ["name", "plan_id", "start_date", "end_date", "last_name"];

    public function alarms() {
        return $this->hasMany('\App\Http\Administration\Alarms', 'guid', 'guid');
    }

    public function groupmaster() {
        return $this->hasMany('\App\Http\Administration\GroupMaster', 'guid', 'guid');
    }

    public function computermaster() {
        return $this->hasMany('\App\Http\Administration\ComputerMaster', 'guid', 'guid');
    }

    public function webusers() {
        return $this->hasMany('\App\Http\Administration\WebUsers', 'guid', 'guid');
    }

    public function plans() {
        return $this->belongsTo('\App\Http\Administration\Plans', 'plan_id', 'plan_id');
    }

    public function agentusers() {
        return $this->hasMany('\App\Http\Administration\AgentUsers', 'guid', 'guid');
    }

    public function createCompany($name, $plan_id, $start_date, $end_date, $last_name = null) {
        $respuesta = array();
        $company = new self();
        $respuesta = self::create(["name" => $name, "plan_id" => $plan_id, "start_date" => $start_date, "end_date" => $end_date, "last_name" => $last_name]);
        if ($respuesta != null)
            return true;
//        return $respuesta;
        return false;
    }

}
