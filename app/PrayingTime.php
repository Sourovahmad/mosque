<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrayingTime extends Model
{
    use SoftDeletes;

    public function image(){
        return $this->BelongsTo('App\image','image_id','id')->withTrashed();
       } 

       public function month()
       {
           return $this->belongsTo('App\month','month_id','id');
       }



}
