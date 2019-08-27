<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CartProduct;
use Faker\Generator as Faker;

$factory->define(CartProduct::class, function (Faker $faker) {
    $random_cart_id = App\Cart::select('id')
                    ->inRandomOrder()
                    ->first();
    $random_product_id = App\Product::select('id')->inRandomOrder()->first();
    return [
        'cart_id'=> $random_cart_id,
        'product_id'=>$random_product_id
    ];
});
