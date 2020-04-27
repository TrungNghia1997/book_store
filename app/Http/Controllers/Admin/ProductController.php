<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductRequest;
use App\Repositories\Backend\ProductRepository;
use App\Repositories\Backend\CategoryRepository;
use App\Repositories\Backend\AuthorRepository;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;   
    private $authorRepository;
    public function __construct() {
        $this->categoryRepository = new CategoryRepository();      
        $this->productRepository = new ProductRepository();
        $this->authorRepository = new AuthorRepository();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productRepository = $this->productRepository->getList();
        $categoryRepository =  $this->categoryRepository->all();
        return view('admin.elements.product.index', compact('productRepository', 'categoryRepository'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryRepository =  $this->categoryRepository->all();    
        $authorRepository =  $this->authorRepository->all();            
        return view('admin.elements.product.add', compact('categoryRepository','authorRepository'));
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
            'category_id',
            'avatar',
            'images',
            'is_feature',           
            'price',
            'sale',
            'id_product',  
            'author_id',            
            'short_description',
            'description',
            'status',
        ]);        
        $product = $this->productRepository->createProduct($data);    
        if($product){   
            return redirect('admin/product')->with('flash_success', 'Success!');
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
        $productRepository = $this->productRepository->getById($id);
        $categoryRepository = $this->categoryRepository->all();  
        $authorRepository =  $this->authorRepository->all();  
        $imgs = explode('+img+', $productRepository->images);       
        return view('admin.elements.product.show', compact('productRepository','imgs', 'categoryRepository', 'authorRepository'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryRepository $categoryRepository, int $id)
    {
        $productRepository = $this->productRepository->getById($id);           
        $categoryRepository = $categoryRepository->all(); 
        $authorRepository =  $this->authorRepository->all();  
         $imgs = explode('+img+', $productRepository->images);  
        return view('admin.elements.product.edit', compact('categoryRepository','imgs', 'productRepository','authorRepository'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, int $id)
    {
        $productRepository = $this->productRepository->getById($id);
        $data = $request->only([
            'name',
            'category_id',
            'avatar',
            'images',
            'is_feature',           
            'price',
            'sale',
            'id_product',  
            'author_id',            
            'short_description',
            'description',
            'status',
        ]);                         
        $data = $this->productRepository->editProduct($data);                 
        $productRepository->update($data);          
        return redirect('admin/product')->with('flash_success', 'Success!');           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productRepository = $this->productRepository->getById($id);
        $productRepository->delete();
        return redirect('/admin/product')->with('alert','Xoa thanh cong');
    }


    
}
