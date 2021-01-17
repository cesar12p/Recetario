<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{

    protected $fillable = [
        'user_id', 'title', 'ingredients','instructions','image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
