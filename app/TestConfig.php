<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestConfig extends Model
{
    public function test(){
        return $this->belongsTo(Test::class);
    }
}
