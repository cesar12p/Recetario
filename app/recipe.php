<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
