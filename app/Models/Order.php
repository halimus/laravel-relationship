<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'ip_address', 'customer_id',
    ];

    /**
     * Get the customer that the orders belongs to.
     */
    public function customer() {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    
    /**
     *  Get the products that the order belongs to.
     */
    public function products() {
        //return $this->belongsToMany('App\Models\Product', 'order_product');
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }
}
