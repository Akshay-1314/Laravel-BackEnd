<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public $timestamps = false;
    public function diagnosis(){
        return $this->belongsTo(diagnosis::class,'user_id','tl_id');
    }
}
