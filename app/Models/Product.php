<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    
    protected $table = 'categories';
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
        return $this->belongsTo('App\Models\Category', 'id');
    }
    
    /**
     * Get the orders for the product.
     */
    public function orders(){
       return $this->hasMany('App\Models\Order', 'id');
    }
    
}