<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function users(){
        return $this->hasMany('User');
    }
}
