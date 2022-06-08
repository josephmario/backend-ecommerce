<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            'customer_code'=>1,
            'order_number'=>0001,
            'status'=>'Created'
        ]);
    }
}
