<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium_profile extends Model
{
    protected $table = 'stadium_profiles';

    public function stadium(){
        return $this->belongsTo('App\Stadium', 'stadium', 'id');
    }

}
