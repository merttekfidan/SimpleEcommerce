<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CartProduct extends Pivot
{
    public function carts()
    {
        return $this->hasMany('App\Cart');
    }
    public function products()
    {
        return $this->hasMany('App\Products');
    }
}
