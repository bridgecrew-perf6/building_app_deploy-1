<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //

    // protected $fillable = ['name',
      //      'emmil',
       //     'phone',
        //    'msg',
        //    'building_number',
        //    'appartment_number',
        //    'user_id'
            protected $guarded = [];


    public function user() //belong to one user
    {
        return $this->belongsTo(User::class);
    }
}
