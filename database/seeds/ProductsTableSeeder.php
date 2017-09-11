<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        //DB::table('products')->delete(); //delete all records
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Models\Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Product1',
                'description' => 'This is description of Product1',
                'price' => '6.00',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Product2',
                'description' => 'This is description of Product1',
                'price' => '8.50',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Product3',
                'description' => null,
                'price' => '8.28',
                'category_id' => 2,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],            
               
        ]);
        
    }

}
