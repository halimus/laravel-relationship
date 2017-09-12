<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    
    protected $table = 'products';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'category_id'
    ];
    
    /**
     * Get the category that the product belongs to.
    */
    public function category(){
        //return $this->belongsTo('App\Post', 'foreign_key');
        //return $this->belongsTo('App\Models\Category');
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    
    
    /**
     *  Get the orders that the product belongs to.
     * 
     * @return use Illuminate\Database\Eloquent\Relations\Relation\belongsToMany
     */
    public function orders() {
        //return $this->belongsToMany('App\Models\Order', 'order_product')->withPivot('quantity');
        return $this->belongsToMany('App\Models\Order')->withPivot('quantity')->withTimestamps();
    }
      
}