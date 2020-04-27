<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\CategoryRepository;
use App\Repositories\Backend\ProductRepository;
use DB;

class CategoryController extends Controller
{
	private $productRepository;
    private $categoryRepository;

	public function __construct() {
        $this->categoryRepository = new CategoryRepository();
        $this->productRepository = new ProductRepository(); 
    }

    public function index(int $id)
    {
    	$category = $this->categoryRepository->getById($id);
        $categoryDetail = DB::table('categories')
                 ->where('parent','=', $id)
                 ->get();
        if($category->parent == 0){
            foreach ($categoryDetail as $detail) {
                $detils = DB::table('categories')
                 ->where('parent','=', $detail->id)
                 ->get();
                 foreach ($detils as $item) {
                    $arr[] = DB::table('products')
                        ->where('category_id', $item->id)
                        ->get()->toarray();                   
                 }
            }

        }
        else{
            if(isset($categoryDetail[0]) == true){
                foreach ($categoryDetail as $detail) {
                    $arr[] = DB::table('products')
                        ->where('category_id', $detail->id)
                        ->get()->toarray();
                }
            }

            else{
                $arr = DB::table('products')
                        ->where('category_id', $id)
                        ->get()->toarray();
            }
        }
        if(isset($arr)){
            foreach ($arr as $value) {            
                if(is_array($value)){
                    foreach ($value as $product) {
                        $productRepository[] = $product;
                    }     
                }
                else{
                    $productRepository[] = $value;
                }       
            }   
        }
        else{
            $productRepository="";
        }
             	
        $categoryRepository = $this->categoryRepository->all();    	
        $productRandom = DB::table('products')->inRandomOrder()->limit(6)->get();
    	return view('users.elements.category', compact('productRepository','productRandom','category', 'categoryRepository'));

    }
}
