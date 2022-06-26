<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $paginate = 6;
    public function __construct()
    {
        view()->composer('partials.clientMenu', function($view){
            $categories = Category::getAll();
            $view->with('categories', $categories);
        });
    }
    public function index()
    {
        
        $products = Product::getByVisibility();
        $productsPagination = $products->paginate(6);
        $count = $productsPagination->total();
        return view('front.index', [
            'products' => $productsPagination,
            'count' => $count
        ]);
    }

    public function getByIdProduct(int $id)
    {
        
        $product = Product::getByID($id);
        
        return view(
            'front.productDetails', 
            ['product' => $product]
        );
    }

    public function getByCategoryId(int $id)
    {   
        $products = Product::getByCategory($id);
        $productsPagination = $products->paginate(6);
        $category = Category::getById($id);
        $count = $productsPagination->total();
       

        return view('front.category', [
            'products' => $productsPagination,
            'category' => $category,
            'count'=> $count
        ]);
    }

    public function getByStateProduct()
    {
        $products = Product::getByState();
        $productsPagination = $products->paginate(6);
        $count = $productsPagination->total();
        return view(
            'front.state', 
            [
                'products' => $productsPagination,
                'count'=> $count
            ]
        );
    }
    
}
