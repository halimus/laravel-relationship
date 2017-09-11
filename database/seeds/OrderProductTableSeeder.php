<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        //DB::table('order_product')->delete(); //delete all records
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Models\OrderProduct::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
                
        DB::table('order_product')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 3,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 2,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'order_id' => 3,
                'product_id' => 1,
                'quantity' => 12,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
               
        ]);

    }

}
