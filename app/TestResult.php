<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    public function test(){
        return $this->hasMany(Test::class);
    }
}
