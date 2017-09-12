<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model {
    
    protected $table = 'order_product';
    protected $primaryKey = ['order_id', 'product_id'];
    //public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'quantity',
    ];

    
    /**
     * Get the product that the order_product belongs to.
    */
    public function product(){
        //return $this->belongsTo('App\Post', 'foreign_key');
        //return $this->belongsTo('App\Models\Category');
        return $this->belongsTo('App\Models\Product');
    }
    
    /**
     * Get the order that the order_product belongs to.
    */
    public function order(){
        return $this->belongsTo('App\Models\Order');
    }
    
}
