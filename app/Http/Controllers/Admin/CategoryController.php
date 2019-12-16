<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        // $categories = Category::all();
        $categories = $this->categoryService->getList(['order_by' => 'name']);
       
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->getList();        
        return view('admin.categories.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->only([
            'name',
            'parent_id'
        ]);

        $data['user_id'] = Auth::id();

        if($data['parent_id'] === "0") {
            $data['parent_id'] = null;
        }

        $storeFlag = $this->categoryService->create($data);
        
        if($storeFlag){
            return redirect('admin/categories/')->with('status', 'Create success');
        }
        
        return back()->withInput($data)->with('status', 'Create failed!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        $data = ['category' => $categories];
        // $data = compact('product');
        return view('admin.categories.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $data = [
            'categories' => $categories,
            'category' => $category
        ];

        return view('admin.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->only([
            'name',
            'parent_id'
        ]);
        $updateFlag = $this->categoryService->update($id, $data);
        if($updateFlag){
            return redirect('admin/categories')->with('status', 'Update success');
        }

        return back()->withInput($data)->with('status', 'Update faild');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteFlag = $this->categoryService->delete($data);
        if($deleteFlag){
            return redirect('admin/categories')->with('status', 'Delete success');
        }
        return back()->with('status', 'Delete faild');
    }
}
