<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'id','name', 'price','description', 'studio','pegi','type', 'platform', 'date_publication'
    ];
    public function getPrice()
    {
        $price = $this->price;

        return number_format($price, 2, ',', ' ') . ' €';
    }
}
