<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operability extends Model
{
    public function drawer(){
        return $this->hasOne('App\Drawer');
    }
}
