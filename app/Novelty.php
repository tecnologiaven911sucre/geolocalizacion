<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    public function users(){
        return $this->morphToMany(User::class,'report');
    }
}
