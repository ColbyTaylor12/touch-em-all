<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'username', 'home_stadium'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experiences() 
    {
        return $this->belongsToMany('App\Experience');
    }
}

