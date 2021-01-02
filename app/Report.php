<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{   
    protected $fillable = ['review','user_id'];

    public function reportable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
