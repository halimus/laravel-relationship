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
       //return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
       //return $this->hasMany('App\Models\Product');
       //return $this->hasMany('App\Models\Product', 'category_id');
       return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }
    
}
