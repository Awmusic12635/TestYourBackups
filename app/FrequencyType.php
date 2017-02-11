<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrequencyType extends Model
{
    public function test(){
        return $this->belongsToMany(Test::class);
    }
}
