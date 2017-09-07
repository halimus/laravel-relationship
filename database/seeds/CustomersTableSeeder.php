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
        
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 25);
            $table->string('email', 45)->unique();
            $table->string('phone', 20)->nullable();
        });
        
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Halim',
                'email' => 'halim@domain.com',
                'phone' => '123-456-7890'
            ],
            [
                'id' => 2,
                'name' => 'Jhon',
                'email' => 'jhon@example.com',
                'phone' => null
            ],           
               
        ]);
        
    }

}
