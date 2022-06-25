<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public static function getAll()
    {
        $categories = Category::all();
        return $categories;
    }
    public static function getById(int $id)
    {
        $category = Category::find($id);
        return $category;
    }
}
