<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function centrodecomando(){
        return $this->belongsTo('App\Command');
    }
    public function operatividad(){
        return $this->belongsTo('App\Operability');
    }
}
