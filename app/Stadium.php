<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadiums';

    // public function team(){
    //     return $this->hasOne('App\Team', 'id');
    // }

    public function home_team(){
        return $this->belongsTo('App\Team', 'home_team', 'id');
    }
}


