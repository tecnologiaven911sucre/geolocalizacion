<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    public function drawer(){
        return $this->belongsTo(Drawer::class);
    }
    public function operability(){
        return $this->belongsTo(Operability::class);
    }
    public function reports(){
        return $this->morphOne(Report::class,'reportable','reportable_type','reportable_id');
    }
    
}
