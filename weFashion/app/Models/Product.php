<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    public function category()
	{
		return $this->belongsTo(Category::class);
	}
    public function picture()
	{
		return $this->hasOne(Picture::class);
	}

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public static function getAll()
    {
        $products = Product::all();
        return $products;
    }

    
    public static function getById($id)
    {

        $product = Product::find($id);

        return $product;
    }
}
