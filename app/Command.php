<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    public function drawer(){
        return $this->hasMany(Drawer::class);
    }
}
