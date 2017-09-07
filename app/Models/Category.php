<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    
    protected $table = 'categories';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    
    /**
     * Get the products for the category.
     */
    public function products(){
       return $this->hasMany('App\Models\Product', 'id');
    }
    
}
