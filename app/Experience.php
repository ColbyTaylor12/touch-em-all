<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['profile_id', 'ticket', 'stadium_visited', 'beer', 'soda', 'hot_dog', 'day_visited'];

    public function user_profile()
    {
        return $this->belongsToMany('App\UserProfile');
    }
}
