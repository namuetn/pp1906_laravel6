<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::paginate(config('product.page_size'));
        $categories = Category::where('parent_id','<>', null)->get();
        
        return view('/products.index', ['products' => $products, 'categories' => $categories]);
    }

    public function ajaxCategory(Request $request)
    {
        $categoryId = $request->category_id;
        $category = Category::findOrFail($categoryId);
        $product = Product::where('category_id', $category);
        $result = ['product' => $product->category->id];
        
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('/products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $data = ['product' => $product];
        // $data = compact('product');

        return view('/products.show', $data);
    }
}
