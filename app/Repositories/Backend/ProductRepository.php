<?php

namespace App\Repositories\Backend;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Product;
use DB;
//use Your Model

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Product::class;
    }

    public function getListAll()
    {
        return $this->orderBy('created_at','DESC');

    }

    public function getList()
    {
        return $this->orderBy('created_at','DESC')->paginate(9);
    }

    public function getListOld()
    {
        return $this->orderBy('created_at','ASC')->paginate(9);
    }

    public function getListPrice()
    {
        return $this->orderBy('price','ASC')->paginate(9);

    }

    public function getListPriceDesc()
    {
        return $this->orderBy('price','DESC')->paginate(9);

    }
    
    public function getSearch($search) {


       $data = Product::where('name', 'like', '%'.$search. '%')
                        ->orWhere('price', $search)
                        ->get();
        return $data;                

    }    

    public function createProduct($data)
    {              
        if(isset($data['avatar'])){
            $data['avatar'] = createImages($data['avatar']);
        }    
        if(isset($data['images'])){
            $data['images'] = createImages($data['images']);
        } 
        $data['nameslug'] = str_slug($data['name']);
    	$product = Product::create($data);  

        return true;
    }

    public function editProduct($data)
    {
        if(isset($data['avatar'])){
            $data['avatar'] = createImages($data['avatar']);
        }    
        if(isset($data['images'])){
            $data['images'] = createImages($data['images']);
        } 
        $data['nameslug'] = str_slug($data['name']);    
        return $data;
    }
   
}
