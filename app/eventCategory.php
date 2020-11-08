<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class eventCategory extends Model
{
    
    use SoftDeletes;
    
    public function events(){
        return $this->hasMany('App\event','category_id','id');
    }
    protected $guarded = [];
    public function abasas(){
        $this->event_count = $this->events->count();
    }   
}
