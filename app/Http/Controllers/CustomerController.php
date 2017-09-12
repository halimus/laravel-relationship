<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        echo '<a href="'.url('/').'">Home</a>';
        echo '<h3>Customers List:</h3>';
        
        //$customers = \App\Models\Customer::all();
        $customers = Customer::all()->sortByDesc("created_at");
       
        foreach ($customers as $customer) {
            echo 'id= '.$customer->id;
            echo '<br>name= '.$customer->name;
            echo '<br>email= '.$customer->email;
            echo '<br>phone= '.$customer->phone;
            echo '<br>created_at= '.$customer->created_at;
            
            $url = url('customers/'.$customer->id);
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
        $customer = Customer::find($id);
        if (!$customer) {
            die('Record not exist!');
        }
        else{
            echo '<a href="'.url('/').'">Home</a> | ';
            echo '<a href="'.url('customers').'">Back to List</a>';
            
            echo '<h3>Customer:</h3>';
            echo 'id= '.$customer->id;
            echo '<br>name= '.$customer->name;
            echo '<br>email= '.$customer->email;
            echo '<br>phone= '.$customer->phone;
            echo '<br>created_at= '.$customer->created_at;

            echo '<h3>The Orders associated to this Customer:</h3>';
            
            $orders = $customer->orders()->get();
            
            foreach ($orders as $order) {
                echo '<hr>';
                echo 'id= '.$order->id;
                echo '<br>customer_id= '.$order->customer_id;
                echo '<br>ip_address= '.$order->ip_address;  
                echo '<br>created_at= '.$order->created_at;
                
                $url = url('orders/'.$order->id);
                echo '<br><a href="'.$url.'">'. $url.'</a>';
                
            }
             
        }
    }
    
}
