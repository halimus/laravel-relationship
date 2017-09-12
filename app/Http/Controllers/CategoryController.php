<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {   
        
        echo '<a href="'.url('/').'">Home</a>';
        echo '<h3>Categories List:</h3>';
        
        //$categories = \App\Models\Category::all();
        $categories = Category::all()->sortByDesc("created_at");
       
        foreach ($categories as $category) {
            echo 'id= '.$category->id;
            echo '<br>name= '.$category->name;
            echo '<br>created_at= '.$category->created_at;
            
            $url = url('categories/'.$category->id);
            echo '<br><a href="'.$url.'">'. $url.'</a>';
            echo '<hr>';
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $category = Category::find($id);
        if (!$category) {
            die('Record not exist!');
        }
        else{
            echo '<a href="'.url('/').'">Home</a> | ';
            echo '<a href="'.url('categories').'">Back to List</a>';
            
            echo '<h3>Category:</h3>';
            echo 'id= '.$category->id;
            echo '<br>name= '.$category->name;
            echo '<br>created_at= '.$category->created_at;

            echo '<h3>Category Products:</h3>';
            
            $products = $category->products()->get();
            foreach ($products as $product) {
                echo '<hr>';
                echo 'id= '.$product->id;
                echo '<br>name= '.$product->name;
                echo '<br>description= '.$product->description;
                echo '<br>price= '.$product->price;
                echo '<br>created_at= '.$product->created_at; 
                
                $url = url('products/'.$product->id);
                echo '<br><a href="'.$url.'">'. $url.'</a>';
            }
        }
    }
    
}
