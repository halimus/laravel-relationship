<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        //DB::table('orders')->delete(); //delete all records
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Models\Order::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
                
        DB::table('customers')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'ip_address' => '127.0.0.1',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'customer_id' => 2,
                'ip_address' => '192.168.0.20',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],    
            [
                'id' => 3,
                'customer_id' => 3,
                'ip_address' => '192.168.0.44',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],  
               
        ]);
        
    }

}
