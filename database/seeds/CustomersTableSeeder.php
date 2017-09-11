<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        //DB::table('customers')->delete(); //delete all records
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Models\Customer::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
          
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Halim',
                'email' => 'halim@domain.com',
                'phone' => '123-456-7890',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Sara',
                'email' => 'sara@example.com',
                'phone' => null,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],           
               
        ]);
        
    }

}
