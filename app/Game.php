<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name', 'price','desc','nmoy', 'studio','pegi','pht','phm'
    ];
}
