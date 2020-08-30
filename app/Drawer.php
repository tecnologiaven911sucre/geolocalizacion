<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function command(){
        return $this->belongsTo(Command::class);
    }
    public function operability(){
        return $this->belongsTo(Operability::class);
    }
    public function cameras(){
        return $this->hasMany(Camera::class);
    }
    public function reports(){
        return $this->morphOne(Report::class,'reportable','reportable_type','reportable_id');
    }
}
