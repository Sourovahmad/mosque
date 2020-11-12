<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salat extends Model
{
    public function image()
    {
        return $this->belongsTo('App\image','image_id','id')->withTrashed();
    }
}
