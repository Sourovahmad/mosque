<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class gallery extends Model
{
    use SoftDeletes;

    public function image(){
        return $this->BelongsTo('App\image','image_id','id')->withTrashed();
    }
}
