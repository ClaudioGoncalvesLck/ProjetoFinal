<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plano extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name','original_price','discount_price','duration'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }   
}

