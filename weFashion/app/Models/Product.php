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
        $productsVisible = Product::getByVisibility();
        $products = $productsVisible->all();
        return $products;
    }

    
    public static function getById($id)
    {
        
        $product = Product::find($id);

        return $product;
    }

    public static function getByCategory($id)
    {
        $productsVisible = Product::getByVisibility();
        $products = $productsVisible->where('category_id', $id);

        return $products;
    }

    public static function getByState()
    {   $productsVisible = Product::getByVisibility();
        $products = $productsVisible->where('state', 'En solde');
        return $products;
    }

    public static function getByVisibility()
    {
        $products = Product::orderBy('created_at', 'desc')->where('visible', 'Publié');
        return $products;
    }
   

}
