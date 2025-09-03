<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');;
    }
    public function colors(){
        return $this->belongsToMany(Color::class,'color_products','product_id');
    }
    public function sizes(){
        return $this->belongsToMany(Size::class,'size_products','product_id');
    }
}
