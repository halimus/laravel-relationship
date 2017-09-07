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
                'description' => 'xx',
                'price' => '6.00',
                'category_id' => 1
            ],
//            [
//                'id' => 2,
//                'name' => 'Product2',
//                'description' => '',
//                'price' => '8.50',
//                'category_id' => 1
//            ],
//            [
//                'id' => 3,
//                'name' => 'Product3',
//                'description' => '',
//                'price' => '8.28',
//                'category_id' => 2
//            ],            
               
        ]);
        
    }

}
