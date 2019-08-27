<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    const DEFAULTCARTID = 1;
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    public static function getDefaultId()
    {
        return self::DEFAULTCARTID;
    }
}
