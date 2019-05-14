<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    protected $table = 'teams';

    // public function stadium(){
    //     return $this->belongsTo('App\Stadium', 'home_team');
    // }
}
