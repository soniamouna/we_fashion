<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        view()->composer('partials.clientMenu', function($view){
            $categories = Category::getAll();
            $view->with('categories', $categories);
        });
    }
    public function index()
    {
        $products = Product::getAll();
        return view('front.index', ['products' => $products]);
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
        $category = Category::getById($id);
        $categories = Category::getAll();
        return view('front.category', [
            'products' => $products,
            'category' => $category,
        ]);
    }
    // public function productAll()
    // {   $products = Product::all();
    //     $pictures = Picture::all();
    //     return view('welcome', ['products' => $products,'pictures'=>$pictures]);
    // }

    // public function productId($id)
    // {
    //     $product=Product::findOrFail($id);
    //     $pictures = Picture::all();
    //     $picture = $pictures[$id==0 ? $id : $id-1];
    //     return view('productDetails',[
    //         'product'=> $product,
    //         'picture'=> $picture
    //     ]);
    // }

    // public function productFilter($filter){
    //     $pictures = Picture::all(); 
    //     $genders = Category::all();

    //     if($filter == "homme"){
    //         $product= Product::where('category_id', $genders[0]->id)->get();
    //     }else if ($filter == "femme"){
    //         $product= Product::where('category_id', $genders[1]->id)->get();
    //     }else if($filter == "solde"){
    //         $product= Product::where('state', "En solde")->get();
    //     }else{
    //         abort(404);
    //     }

    //     return view('welcome', [
    //                 'product' => $product,
    //                 'picture' => $pictures
    //             ]);
        
        // $gender = $genders->where('name', $filter)->value('id');
        
        // if($gender){
        //     $productGender = Product::where('category_id', $gender);
        //     return view('welcome', [
        //         'product' => $productGender,
        //         'picture' => $pictures
        //     ]);
        // } else if($filter=="solde"){
        //     $productSolde = Product::where('state', $filter);
        //     return view('welcome', [
        //         'product' => $productSolde,
        //         'picture' => $pictures
        //     ]);
        // } else{
        //     abort(404);
        // }
    // }
}
