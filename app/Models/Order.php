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
     * Get the user that the orders belongs to.
    */
    public function user(){
        return $this->belongsTo('App\Models\User', 'id');
    }
    
    /**
     * Get the products for the order.
     */
    public function products(){
       return $this->hasMany('App\Models\Product', 'id');
    }
}
