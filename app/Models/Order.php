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
        'user_id', 'ip_address',
    ];
    
    /**
     * Get the customer that the orders belongs to.
    */
    public function customer(){
        return $this->belongsTo('App\Models\Customer', 'id');
    }
    
    /**
     * Get the products for the order.
     */
    public function products(){
       return $this->hasMany('App\Models\Product', 'id');
    }
}
