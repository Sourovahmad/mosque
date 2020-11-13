<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class session extends Model
{
    use SoftDeletes;
    
    public function members(){
        return $this->hasMany('App\committee','session_id','id');
    }
    protected $guarded = [];

    public function abasas(){
        $this->member = $this->members->count();
    } 
}
