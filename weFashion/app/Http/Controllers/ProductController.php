<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {   $products = Product::All();
    //     $pictures = Picture::All();
    //     return view('welcome', ['products' => $products,'pictures'=>$pictures]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $products = Product::paginate(15);
        $categories = Category::all();
        return view('home',  ['products' => $products, 'categories'=>$categories]);
    }

    public function create()
    {
        
        return view ('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'visible' => 'required',
            'state' => 'required',
            'reference' => 'required',   
        ]);

        Product::create($request->all());

        return redirect()->route('produits.index')
        ->with('success','Product created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'visible' => 'required',
            'state' => 'required',
            'reference' => 'required',

        ]);

        $product->update($request->all());

        return redirect()->route('produits.index')
        ->with('success','Product created succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()->route('produits.index')
        ->with('success', 'Product dleted successfully');
    }
}
