<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert([
            'order_number'=>0001,
            'product_code'=>00001,
            'quantity'=>10,
            'gross_sale'=>1000
        ]);
    }
}
