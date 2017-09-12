<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        echo '<a href="'.url('/').'">Home</a>';
        echo '<h3>Products List:</h3>';
        
        //$products = \App\Models\Product::all();
        $products = Product::all()->sortByDesc("created_at");
       
        foreach ($products as $product) {
            echo 'id= '.$product->id;
            echo '<br>name= '.$product->name;
            echo '<br>description= '.$product->description;
            echo '<br>price= '.$product->price;
            echo '<br>category_id= '.$product->category_id;
            echo '<br>category_name= '.$product->category->name;
            
            echo '<br>created_at= '.$product->created_at;
            
            $url = url('products/'.$product->id);
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
        $product = Product::find($id);
        if (!$product) {
            die('Record not exist!');
        }
        else{
            echo '<a href="'.url('/').'">Home</a> | ';
            echo '<a href="'.url('products').'">Back to List</a>';
            
            echo '<h3>Product:</h3>';
            echo 'id= '.$product->id;
            echo '<br>name= '.$product->name;
            echo '<br>description= '.$product->description;
            echo '<br>price= '.$product->price;
            echo '<br>category_id= '.$product->category_id;
            echo '<br>category_name= '.$product->category->name;        
            echo '<br>created_at= '.$product->created_at;

            echo '<h3>Product Orders:</h3>';
            
            $orders = $product->orders()->get();
            
            foreach ($orders as $order) {
                echo '<hr>';
                echo 'id= '.$order->id;
                echo '<br>customer_id= '.$order->customer_id;
                echo '<br>ip_address= '.$order->ip_address;  
                echo '<br>quantity= '.$order->pivot->quantity;
                echo '<br>created_at= '.$order->created_at;
            }
             
        }
    }
    
}
