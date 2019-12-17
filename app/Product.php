<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'name',
        'description', 
        'price', 
        'image', 
        'category_id', 
        'id_user',
        'status'];
    

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
