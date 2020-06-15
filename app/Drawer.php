<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function commands(){
        return $this->belongsTo(Command::class);
    }
    public function statuses(){
        return $this->belongsTo(Status::class);
    }

}
