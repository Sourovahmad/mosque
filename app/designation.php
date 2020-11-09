<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class designation extends Model
{
    use SoftDeletes;
    
    public function members(){
        return $this->hasMany('App\committee','designation_id','id');
    }
    protected $guarded = [];

    public function abasas(){
        $this->member = $this->members->count();
    }  
}
