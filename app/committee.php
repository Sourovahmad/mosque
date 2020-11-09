<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class committee extends Model
{
    use SoftDeletes;
    public function designation()
    {
        return $this->belongsTo('App\designation','designation_id','id')->withTrashed();
    }
}
