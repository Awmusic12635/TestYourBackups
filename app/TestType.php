<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    public function test(){
        return $this->belongsToMany(Test::class);
    }
}
