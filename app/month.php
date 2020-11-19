<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class month extends Model
{
    public function month()
    {
        return $this->belongsTo('App\PrayingTime','month_id','id')->withTrashed();
    }
}
