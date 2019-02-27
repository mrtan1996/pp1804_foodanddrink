<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model


{
    public function roles() 
    {
        return $this->belongto(User::class);
    } 
}
