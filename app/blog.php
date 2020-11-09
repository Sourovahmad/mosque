<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog extends Model
{
    
    use SoftDeletes;
    
    public function image(){
        return $this->belongsTo('App\image','image_id','id')->withTrashed();
    }
    public function category(){
        return $this->belongsTo('App\blogCategory','category_id','id')->withTrashed();
    }
    public function language(){
        return $this->belongsTo('App\blogLanguage','language_id','id')->withTrashed();
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

}
