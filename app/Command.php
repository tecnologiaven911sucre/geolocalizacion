<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    public function drawers(){
        return $this->hasmany(Drawer::class);
    }
}
