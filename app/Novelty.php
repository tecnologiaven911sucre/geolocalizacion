<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    public function reports(){
        return $this->morphOne(Report::class,'reportable','reportable_type','reportable_id');
    }
}
