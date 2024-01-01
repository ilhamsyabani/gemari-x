<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kuis1(){
        return $this->hasMany(Kuis1::class);
    }
    public function kuis2(){
        return $this->hasMany(Kuis2::class);
    }
    public function kuis3(){
        return $this->hasMany(Kuis3::class);
    }
    public function kuis4(){
        return $this->hasMany(Kuis4::class);
    }
}
