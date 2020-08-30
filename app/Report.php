<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{   
    protected $fillable = ['review'];

    public function reportable(){
        return $this->morphTo();
    }
}
