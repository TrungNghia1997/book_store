<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Category;
//use Your Model

/**
 * Class CategoryRepository.
 */
class CategoryRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Category::class;
    }

    public function getList()
    {
    	return $this->orderBy('created_at','DESC')->paginate(9); 
    }
}
