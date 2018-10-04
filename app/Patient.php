<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public $timestamps = false;
    public function user()
    {
        return $this->belongTo('App\Users');
    }
}
