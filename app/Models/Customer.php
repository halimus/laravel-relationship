<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    
    protected $table = 'customers';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone'
    ];
    
    /**
     * Get the products for the category.
     */
    public function orders(){
       //return $this->hasMany('App\Models\Order');
       //return $this->hasMany('App\Models\Order', 'customer_id');
       return $this->hasMany('App\Models\Order', 'customer_id', 'id');
       
    }
    
}
