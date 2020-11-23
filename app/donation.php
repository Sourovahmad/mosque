<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class donation extends Model
{
    use Notifiable;

    public function donator(){
        return $this->belongsTo('App\donator','donator_id','id');
    }
}
