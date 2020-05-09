<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\ProductRepository;
use App\Repositories\Backend\CategoryRepository;

class SearchController extends Controller
{
	public function __construct() {
        $this->categoryRepository = new CategoryRepository();
        $this->productRepository = new ProductRepository();
    }


    public function search() {

        if($_GET['search']){
            $search = $_GET['search'];
            $productRepository = $this->productRepository->getSearch($search);
            $categoryRepository =  $this->categoryRepository->all();
            
            return view('admin.elements.search', compact('productRepository', 'search', 'categoryRepository'));      
        }
        else {
            
            return redirect()->back()->with('alert', 'Không có thông tin về sản phẩm này');
        }  
        
    }


}
