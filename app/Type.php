<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User', 'user_type', 'type_id', 'user_id');
    }
}
