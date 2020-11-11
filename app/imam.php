<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imam extends Model
{
    public function image()
    {
        return $this->belongsTo('App\image','image_id','id')->withTrashed();
    }
}
