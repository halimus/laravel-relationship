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

    
//    /**
//     * Get the orders that the orders_products belongs to.
//     */
//    public function orders() {
//        return $this->belongsToMany('App\Models\Order', 'id');
//    }
//
//    /**
//     * Get the products that the orders_products belongs to.
//     */
//    public function products() {
//        return $this->belongsToMany('App\Models\Product', 'id');
//    }
    
}
