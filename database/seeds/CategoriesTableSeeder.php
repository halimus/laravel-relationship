<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       
        //DB::table('categories')->delete(); //delete all records
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Models\Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Category1', 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],  
            ['id' => 2, 'name' => 'Category2', 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],  
            ['id' => 3, 'name' => 'Category3', 'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')],  
        ]);
        
    }

}
