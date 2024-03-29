<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'id','name','image', 'price', 'desc', 'studio','pegi','genre', 'platform', 'date', 'nmoy'
    ];
    public function getPrice()
    {
        $price = $this->price;

        return number_format($price, 2, ',', ' ') . ' €';
    }
}
