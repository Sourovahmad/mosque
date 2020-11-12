<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class program extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo('App\programCategory','category_id','id')->withTrashed();
    }

    public function image()
    {
        return $this->belongsTo('App\image','image_id','id')->withTrashed();
    }
}
