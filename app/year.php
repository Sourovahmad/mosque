<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class year extends Model
{
    public function year()
    {
        return $this->belongsTo('App\PrayingTime','year_id','id')->withTrashed();
    }
}
