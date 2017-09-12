<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        echo '<a href="'.url('/').'">Home</a>';
        echo '<h3>Orders List:</h3>';
        
        $orders = Order::all()->sortByDesc("created_at");
       
        foreach ($orders as $order) {
            echo 'id= '.$order->id;
            echo '<br>customer_id= '.$order->customer_id;
            echo '<br>customer_name= '.$order->customer->name;
            echo '<br>ip_address= '.$order->ip_address;
            echo '<br>created_at= '.$order->created_at;
            
            $url = url('orders/'.$order->id);
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
        $order = Order::find($id);
        if (!$order) {
            die('Record not exist!');
        }
        else{
            echo '<a href="'.url('/').'">Home</a> | ';
            echo '<a href="'.url('orders').'">Back to List</a>';
            
            echo '<h3>Order:</h3>';
            echo 'id= '.$order->id;
            echo '<br>customer_id= '.$order->customer_id;
            echo '<br>customer_name= '.$order->customer->name;
            echo '<br>ip_address= '.$order->ip_address;       
            echo '<br>created_at= '.$order->created_at;

            echo '<h3>The Products associated to this Order:</h3>';
            
            $products = $order->products()->get();
            
            foreach ($products as $product) {
                echo '<hr>';
                echo 'id= '.$product->id;
                echo '<br>name= '.$product->name;
                echo '<br>description= '.$product->description;
                echo '<br>price= '.$product->price;
                echo '<br>category_id= '.$product->category_id;
                echo '<br>category_name= '.$product->category->name;        
                echo '<br>created_at= '.$product->created_at;
                
                $url = url('products/'.$product->id);
                echo '<br><a href="'.$url.'">'. $url.'</a>'; 
            }
             
        }
    }
    
}
