<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    protected $table = 'diagnosis';
    public $timestamps = false;
    public function booking(){
        return $this->hasOne(booking::class,'user_id','tl_id');
    }
}