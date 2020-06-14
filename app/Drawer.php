<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function command(){
        return $this->belongsTo(Command::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }

}
