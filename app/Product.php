<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description', 'price', 'image', 'category_id', 'user_id '];
    //
    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
