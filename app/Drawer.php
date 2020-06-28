<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function command(){
        return $this->belongsTo('App\Command');
    }
    public function statuses(){
        return $this->belongsTo(Status::class);
    }

}
