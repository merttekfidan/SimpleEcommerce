<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 5)->create();
        factory(App\Cart::class, 5)->create();
        //factory(App\CartProduct::class, 5)->create();
    }
}
