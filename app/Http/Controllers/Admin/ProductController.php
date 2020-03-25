<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Size;
// use App\Services\ProductService;


class ProductController extends Controller
{
    // protected $productService;

    // public function __construct(ProductService $productService) {
    //     $this->productService = $productService;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id','<>',null)->get();
        $sizes = Size::all();

        return view('admin.products.create', ['categories' => $categories, 'sizes' => $sizes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $data = $request->only([
            'name',
            'content',
            'category_id',
            'quantity',
            'price',
            'image',
        ]);


        $data['user_id'] = Auth::id();
        // dd($data);
        //--------upload images--------------
        $uploaded = $this->upload($data['image']);
    
        if (!$uploaded['status']) {
            return back()->with('status', $uploaded['msg']);
        }

        $data['image'] = $uploaded['file_name'];
        $sizeIds = $request->input('size');
        //------------------------------------
        try {
            $product = Product::create($data);
            $product->sizes()->attach($sizeIds, ['quantity' => $product->quantity]);
        } catch (\Exception $e) {
            \Log::error($e);

            return back()->withInput($data)->with('status', 'Create failed!');
        }

        return redirect('/admin/products/')
            ->with('status', 'Create success!');
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
        return view('admin.products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $data = [
            'product' => $product,
            'categories' => $categories,
        ];

        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->only([
            'name',
            'content',
            'quantity',
            'price',    
            'image',
            'category_id'
        ]);

        $product = Product::findOrFail($id);

        try {
            $product->update($data);
        } catch (\Exception $e) {
            \Log::error($e);

            return back()->with('status', 'Update faild.');
        }

        return redirect('admin/products/')->with('status', 'Update success.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        try {
            $product->delete();
        } catch (\Exception $e) {
            \Log::error($e);

            return back()->with('status', 'Delete faild.');
        }

        return redirect('admin/products')->with('status', 'Delete success');
    }

    private function upload($file) 
    {
        $destinationFolder = public_path() . "/" . config('product.image_path');

        try {
            $fileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            
            $ext = $file->getClientOriginalExtension();
            if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") {
                $result = [
                    'status' => false,
                    'msg' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.',
                ];
            }

            $file->move($destinationFolder, $fileName);

            $result = [
                'status' => true,
                'file_name' => $fileName,
            ];
        } catch (Exception $e) {
            $msg = $e->getMessage();

            $result = [
                'status' => false,
                'msg' => $msg,
            ];
        }

        return $result;
    }
}
