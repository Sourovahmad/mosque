<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blogCategory extends Model
{
    use SoftDeletes;
    public function blogs(){
        return $this->hasMany('App\blog','category_id','id');
    }
    protected $guarded = [];

    public function abasas(){
        $this->blog_count = $this->blogs->count();
    }  
}
