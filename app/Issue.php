<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
    public function user() //belong to one user
    {
        return $this->belongsTo(User::class);
    }
}
