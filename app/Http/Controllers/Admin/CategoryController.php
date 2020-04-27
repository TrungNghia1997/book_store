<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryRequest;
use App\Repositories\Backend\CategoryRepository;
use App\Models\Category;
class CategoryController extends Controller
{
    private $categoryRepository;
    

    public function __construct() {
        $this->categoryRepository = new CategoryRepository();
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $categories=  $this->categoryRepository->getList();      
        return view('admin.elements.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $r)
    {

        $categories = Category::all()->toarray();
        if( getLevel($categories, $r->idParent, 1)<4){

            $cate = new Category;
            $cate->name=$r->name;
            $cate->slug=str_slug($r->name);
            $cate->parent=$r->idParent;
            $cate->save();
            return redirect()->back()->with('thongbao', 'đã thêm thành công');
        }else{
            return redirect()->back()->withErrors(['name'=>'danh mục vượt quá số cấp mà giao diện hỗ trợ'])->withInput();
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['categories'] = category::all()->toarray();
        $data['cate'] = category::findOrFail($id);
        return view('admin.elements.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $r, int $id)
    {    
        $categories = Category::all()->toarray();
        if( getLevel($categories, $r->idParent, 1)<4){

            $cate = category::findOrFail($id);
            $cate->name=$r->name;
            $cate->slug=str_slug($r->name);
            $cate->parent=$r->idParent;
            $cate->save();
            return redirect()->back()->with('thongbao', 'đã sửa thành công');
        }else{
            return redirect()->back()->withErrors(['name'=>'danh mục vượt quá số cấp mà giao diện hỗ trợ'])->withInput();
            
        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Category::destroy($id);
        return redirect()->back()->with('thongbao', 'đã xóa thành công');

       
    }
    public function delCate($id)
    {   
        Category::destroy($id);
        return redirect()->back()->with('thongbao', 'đã xóa thành công');

       
    }
}
