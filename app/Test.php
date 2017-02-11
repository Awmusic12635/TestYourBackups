<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /*
     * Get the user that owns this checkin
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function testType(){
        return $this->hasMany(Test::class);
    }

    public function frequencyType(){
        return $this->hasMany(FrequencyType::class);
    }

    public function testConfig(){
        return $this->hasOne(TestConfig::class);
    }

    public function testResults(){
        return $this->belongsToMany(TestResult::class);
    }

}
