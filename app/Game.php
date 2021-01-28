<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name', 'price','description', 'studio','pegi','type', 'platform', 'date_publication'
    ];
}
