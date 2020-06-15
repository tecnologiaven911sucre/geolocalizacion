<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function drawers(){
        return $this->hasMany(Drawer::class);
    }
}
